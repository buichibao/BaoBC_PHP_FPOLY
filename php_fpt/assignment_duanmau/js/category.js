function validate({ form, selectors, callback }) {
  const validator = {
    form: form,
    simulator: {},
    selectors: selectors,
    handleCondition(obj) {
      const validators = this.simulator[obj.selector];
      const inputElement = $(this.form + " " + obj.selector);
      let isError;
      for (let i = 0; i < validators.length; i++) {
        switch (inputElement.attr('type')) {
          case 'file':
            const label = $(inputElement).parent('.input-box').find('label');
            isError = validators[i](inputElement.val().trim(), label);
            break;
          default:
            isError = validators[i](inputElement.val().trim());
        }
        if (isError) break;
      }
      let messageElement = inputElement.parent('.input-box').find('.message');
      if (isError) {
        inputElement.parent('.input-box').addClass('error');
        messageElement.text(isError);
      } else {
        inputElement.parent('.input-box').removeClass('error');
        messageElement.text('');
      }
      return !isError;
    },
    handleSubmitForm() {
      const _this = this;
      $(_this.form).off('click').on('submit', function (e) {
        e.preventDefault();
        let isSubmit = true;
        $.each(_this.selectors, function (indexInArray, valueOfElement) {
          const isValid = _this.handleCondition(valueOfElement);
          if (!isValid) {
            isSubmit = false;
          }
        });
        if (isSubmit) {
          let formData = $(_this.form).serializeArray();
          callback(formData);

        } else {
          e.preventDefault();
        }
      })
    },
    handleCatchEvent() {
      const _this = this;
      $.each(this.selectors, function (index, element) {
        if (Array.isArray(_this.simulator[element.selector])) {
          _this.simulator[element.selector].push(element.validator);
        } else {
          _this.simulator[element.selector] = [element.validator];
        }
        $(_this.form + " " + element.selector).on('blur', function () {
          _this.handleCondition(element);
        });
        let inputElement = $(_this.form + " " + element.selector);
        $(_this.form + " " + element.selector).on('input', function () {
          inputElement.parent('.input-box').find('.message').text("");
          inputElement.parent('.input-box').removeClass('error');
        });
      });
    },
    main() {
      this.handleCatchEvent();
      this.handleSubmitForm();
    }
  }
  validator.main();
}
function checkBlank(selector) {
  return {
    selector: selector,
    validator(value, label) {
      if (label) {
        value.length === 0 ? label.text('Upload file') : label.text(value);
      }
      return value.length === 0 ? 'Không được để trống!' : undefined;
    }
  }
}
function checkLength(selector, min) {
  return {
    selector: selector,
    validator(value) {
      return value.length < min ? `Bắt buộc phải trên ${min} ký tự!` : undefined;
    }
  }
}
function checkWhiteSpace(selector) {
  return {
    selector: selector,
    validator(value) {
      value = value.split('');
      let found = false;
      let checkWhiteSpace = " ";
      for (let i = 0; i < value.length; i++) {
        if (value[i] === checkWhiteSpace) {
          found = true;
          break;
        }
      }
      return found ? `Không được chứa khoảng trắng!` : undefined;
    }
  }
}
function checkMatch(selector, callback) {
  return {
    selector: selector,
    validator(value) {
      return value !== callback() ? 'Mật khẩu không khớp!' : undefined;
    }
  }
}
function checkEmail(selector) {
  return {
    selector: selector,
    validator(value) {
      const regex_email = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;;
      return !regex_email.test(value) ? 'Email không chính xác!' : undefined;
    }
  }
}
function getData() {
  const url = "../model/category/listCategory.php";
  $.post(url, {},
    function (data, textStatus, jqXHR) {
      renderCategory(data);
    },
    "json"
  );
}

getData();
function renderCategory(data) {
  console.log(data);
  let html = "";
  for (let i = 0; i < data.length; i++) {
    html += `<div data-ID="${data[i].id}" class="title-list">
                    <div class="item"></div>
                    <div class="item"><input type="checkbox"></div>
                    <div class="item">${data[i].id}</div>
                    <div class="item">${data[i].category_name}</div>
                    <div class="item"></div>
                    <div class="item"><i data-ID="${i}" class='bx bx-pencil edit'></i></div>
                    <div class="item"><i data-ID="${data[i].id}" class='bx bx-trash delete'></i></div>
                </div>`
  }
  $('.cart.convertContent .wrapper').html(html);
  handleDeleteCategory();
  handleUpdateCategory(data);
}


function deleteCategory(id) {
  const url = "../model/category/deleteCategory.php";
  $.post(url, { id: id },
    function (data, textStatus, jqXHR) {
      console.log(data)
      getData();
    },
    "json"
  );
};



function handleDeleteCategory() {
  $('.product_container .wrapper .title-list .item i.delete').on('click', function () {
    const ID = parseInt($(this).attr('data-ID'));
    deleteCategory(ID);

  })
}

function handleUpdateCategory(data) {
  $('.product_container .wrapper .title-list .item i.edit').on('click', function () {
    const ID = parseInt($(this).attr('data-ID'));
    const ID_item = parseInt($(this).parents('.title-list').attr('data-ID'))
    $('.popup-update-category').addClass('active');
    $('.popup-update-category .wrapper input[name="category_name"]').val(data[ID].category_name);
    $('.popup-update-category .wrapper input[name="ID"]').val(ID_item);
  })
  validate({form:'.form-update-category',selectors:[
    checkBlank('#category_name'),
    checkLength('#category_name',5),
  ],callback(forms){
    console.log(data);
    $.post("../model/category/updateCategory.php", forms,
      function (data, textStatus, jqXHR) {
        if(data){
          getData();
          $('.popup-update-category').trigger('click');
          swal('Cập nhật thành công',{icon:'success',button:false,timer:1500})
        }
      },
      "json"
    );
  }})

  $('.popup-update-category').on('click', function () {
    $('.popup-update-category').removeClass('active');

  });
  $('.popup-update-category .wrapper').on('click', function (e) {
    e.stopPropagation();
  })
}


function handleAddCategory() {
  $('.cart.convertContent .grid .btn.add').on('click', function () {
    $('.popup-add-category').addClass('active');
  })
  validate({form:'.form-add-category',selectors:[
    checkBlank('#category_name'),
    checkLength('#category_name',5),
  ],callback(forms){
console.log(forms);
    $.post("../model/category/addCategory.php", forms,
      function (data, textStatus, jqXHR) {
        if(data){
          getData();
          $('.popup-add-category').trigger('click');
          swal('Thêm mới thành công',{icon:'success',button:false,timer:1500})
        }else{
          swal('Tên đã tồn tại!',{icon:'error',button:false,timer:1500})
        }
      },
      "json"
    );
  }})

  $('.popup-add-category').on('click', function () {
    $('.popup-add-category').removeClass('active');
  });
  $('.popup-add-category .wrapper').on('click', function (e) {
    e.stopPropagation();
  })
}
handleAddCategory();

validate({form:'.searchCategoryName',selectors:[],callback(data){
  if(data[0].value.length === 0){
    getData();
  }else{
    $.post("../model/category/findCategory.php", data,
      function (data, textStatus, jqXHR) {
        let html = "";
  for (let i = 0; i < data.length; i++) {
    html += `<div data-ID="${data[i].id}" class="title-list">
                    <div class="item"></div>
                    <div class="item"><input type="checkbox"></div>
                    <div class="item">${data[i].id}</div>
                    <div class="item">${data[i].category_name}</div>
                    <div class="item"></div>
                    <div class="item"><i data-ID="${i}" class='bx bx-pencil edit'></i></div>
                    <div class="item"><i data-ID="${data[i].id}" class='bx bx-trash delete'></i></div>
                </div>`
  }
  $('.cart.convertContent .wrapper').html(html);
      },
      "json"
    );
  }
}})