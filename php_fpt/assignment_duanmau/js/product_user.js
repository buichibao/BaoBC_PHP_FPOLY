const session = JSON.parse(sessionStorage.getItem('data'));
const session_container = document.querySelector('header .session-js');
let header = ''
if(parseInt(session.role)  == 1){
   header = `<a href="index.php?page=loginadmin"><i class='bx bxs-user-check' title="Đăng nhập vào trang quản trị"></i></a>
                `
}else{
    header =` <a href="index.php?page=mybill" class="fas fa-shopping-cart"></a>
              <a href="index.php?page=logout" class='bx bx-log-in' title="Đăng xuất"></a>
              `
}
session_container.innerHTML = header;
