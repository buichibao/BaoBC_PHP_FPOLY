<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH KHÁCH HÀNG</h1>
            </div>
            <div class="row formcontent">
               <div class="row mb10 formdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ KHÁCH HÀNG</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>ĐỊA CHỈ</th>
                        <th>VAI TRÒ</th>
                        <th></th>
                    </tr>
                    <?php foreach ($listkhachhang as $khachhang) { 
                           extract($khachhang);
                        ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?=$id?></td>
                        <td><?=$username?></td>
                        <td><?=$password?></td>
                        <td><?=$email?></td>
                        <td><?=$phone_number?></td>
                        <td><?=$address?></td>
                        <td><?php echo ($role==1)?"Admin":"User"?></td>
                        <td><a href="index.php?page=updatekhachhang&id=<?=$id?>"><input type="button" value="Sửa"></a>  <a href="index.php?page=deletekhachhang&id=<?=$id?>"><input type="button" value="Xoá" name="delete"></a></td>
                    </tr>
                  <?php } ?>
                </table>
               </div>
               <p><?php if(isset($success) && ($success!="")) echo "$success" ?></p>
               <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ tất cả">
                <input type="button" value="Xoá tất cả danh mục đã chọn">
               </div>
            </div>
            
         </div>