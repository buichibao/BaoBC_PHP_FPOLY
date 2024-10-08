    var username; 
    var password; 
    var comfirmpassword ;
    var email ;
  


function confrim() {
    password = document.getElementById('password').value;
    comfirmpassword = document.getElementById('comfirmpassword').value;
   if(password == comfirmpassword){
    document.getElementById("passError").innerHTML ="";
   }else{
    document.getElementById("passError").innerHTML ="Mật khẩu không trùng khớp";
    preventDefault();
    return;
   }
}


function checkmail(){
   email = document.getElementById("email").value;

   var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
   if(!(emailPattern.test(email))){
      document.getElementById('emailError').innerHTML ="Email không đúng định dạng";
      preventDefault();
      return;
   }else {
    document.getElementById('emailError').innerHTML ="";
   }
}

function checkusername() {
   username = document.getElementById("username").value;
   $pattern = '/^[a-zA-Z0-9]{8,}$/';
   if(pattern.test(username)){
        document.getElementById('usernameError').innerHTML="";
   }else {
      document.getElementById('usernameError').innerHTML="Không hợp lệ";
   }
   
}




