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
        $(_this.form).on('submit', function (e) {
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

validate({form:'.login',
    selectors:[checkBlank('input[name="username"]'),checkBlank('input[name="password"]')],callback(forms){
        console.log(forms)
        $.post("./model/sign_in/login.php", forms,
            function (data, textStatus, jqXHR) {
       
                if(data !== false){
                  // if(data.role == 1){
                  //   window.location.href = "admin/index.php?page=listproduct"; 
                  //   sessionStorage.setItem('data',JSON.stringify(data));
                  // }else{
                    window.location.href = "index.php?page=productlist";
                    sessionStorage.setItem('data',JSON.stringify(data));
                  // }
                }else{
                  swal('Tài khoản mật khẩu không chính xác', { icon: 'error', button: false, timer: 1500 });
                }
            },
            "json"
        );
    }
})