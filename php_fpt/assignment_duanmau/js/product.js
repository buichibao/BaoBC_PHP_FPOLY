function getData() {
    const url = "../model/product/listProduct.php";
    $.post(url, {},
        function (data, textStatus, jqXHR) {
            renderProduct(data);
        },
        "json"
    );
}

getData();
function renderProduct(data) {
    console.log(data);
    let html = "";
    for (let i = 0; i < data.length; i++) {
        html += `
      <div class="box">
            <div class="image">
                <img src="../upload/${data[i].image}"/>  <!-- ảnh -->
                <a href="" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>${data[i].product_name}</h3>    <!-- tên -->
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.
                    Sit poro illo.</p>
                <p style="color:orangered;font-weight:bold" ></p>    
                
                <span class="pice">${data[i].price}VND</span><br> 
                <button  class="btn del" style="background-color:red;" data-ID="${data[i].id}">Xoá</button>
                <button  class="btn up" data-ID="${i}">Chỉnh sửa</button>   
            </div>
        </div>`;


    }
    $('.menu .box-container ').html(html);
    handleDeleteProduct();
    handleUpdateCategory(data);
    console.log(JSON.parse(sessionStorage.getItem('data')));
    
}


function deleteCategory(id) {
    const url = "../model/product/deleteProduct.php";
    $.post(url, { id: id },
        function (data, textStatus, jqXHR) {
            console.log(data)
            swal('Xoá thành công', { icon: 'success', button: false, timer: 1500 })
            getData();
        },
        "json"
    );
};



function handleDeleteProduct() {
    $('#menu .box-container .box .btn.del').on('click', function () {
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
    validate({
        form: '.form-update-category', selectors: [
            checkBlank('#category_name'),
            checkLength('#category_name', 5),
        ], callback(forms) {
            console.log(data);
            $.post("../model/category/updateCategory.php", forms,
                function (data, textStatus, jqXHR) {
                    if (data) {
                        getData();
                        $('.popup-update-category').trigger('click');
                        swal('Cập nhật thành công', { icon: 'success', button: false, timer: 1500 })
                    }
                },
                "json"
            );
        }
    })

    $('.popup-update-category').on('click', function () {
        $('.popup-update-category').removeClass('active');

    });
    $('.popup-update-category .wrapper').on('click', function (e) {
        e.stopPropagation();
    })
}


function handleAddProduct() {
    let image_test = null;
    let formData = new FormData();
    $('.form-add-product input[name="image"]').on('change', function () {
        image_test = this.files[0].name;
        formData.append('image', this.files[0]);
    })
    validate({
        form: '.form-add-product',
        selectors: [
            checkBlank('input[name="productname"]'),
            checkLength('input[name="productname"]', 5),
            checkBlank('input[name="price"]'),
            checkBlank('input[name="description"]'),

        ], callback(form) {
            const obj = {};
            for (let i = 0; i < form.length; i++) {
                obj[form[i].name] = form[i].value;
            }
            obj.image_test = image_test;
            $.post("../model/product/addProduct.php", obj,
                function (data, textStatus, jqXHR) {
                    console.log(data);
                },
                "json"
            );
        }

    })
}
handleAddProduct();
validate({
    form: '.searchNameProduct', selectors: [], callback(forms) {
        if (forms[0].value.length === 0) {
            getData();
        } else {
            $.post("../model/product/findProduct.php", forms,
                function (data, textStatus, jqXHR) {
                    let html = "";
                    for (let i = 0; i < data.length; i++) {
                        html += `
        <div class="box">
              <div class="image">
                  <img src="../upload/${data[i].image}"/>  <!-- ảnh -->
                  <a href="" class="fas fa-heart"></a>
              </div>
              <div class="content">
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
                  <h3>${data[i].product_name}</h3>    <!-- tên -->
                  <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.
                      Sit poro illo.</p>
                  <p style="color:orangered;font-weight:bold" ></p>    
                  
                  <span class="pice">${data[i].price}VND</span><br> 
                  <button  class="btn del" style="background-color:red;" data-ID="${data[i].id}">Xoá</button>
                  <button  class="btn up" data-ID="${i}">Chỉnh sửa</button>   
              </div>
          </div>`;
                    }
                    $('.menu .box-container ').html(html);
                },
                "json"
            );
        }
    }
})

