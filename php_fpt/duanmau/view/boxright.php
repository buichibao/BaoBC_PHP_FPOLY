<div class="row mb ">
                    <div class="boxtitle">Tài khoản</div>
                    <div class="boxcontent formtaikhoan">
                        <?php 
                           if(isset($_SESSION['user'])){ 
                            extract($_SESSION['user']); 
                            ?>
                            <div class="row mb10">
                             Xin chào ,<?php echo $username ?></br>
                            </div>
                            <div class="row mb10">
                                <li>
                                    <a href="index.php?page=capnhattaikhoan">Cập nhật tài khoản</a>
                                </li>
                                <?php if($role == 1){ ?>
                                   <li>
                                    <a href="../admin/index.php">Đăng nhập Admin</a>
                                   </li>
                                <?php  } ?>
                                <li>
                                    <a href="index.php?page=quenmatkhau">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?page=dangxuat">Đăng xuất</a>
                                </li>
                            </div>
                          <?php } else { ?>
                         <form action="index.php?page=dangnhap" method="post">
                            <div class="row mb10">
                            Tên đăng nhập</br>
                            <input type="text" name="username" id="">
                            </div>
                            <div class="row mb10">
                            Mật khẩu <br>
                            <input type="password" name="password" id="">
                            </div>
                            <div class="row mb10">
                            <input type="checkbox" name="" id="">Ghi nhớ tài khoản
                            </div>
                            <div class="row mb10">
                            <input type="submit" name="dangnhap" value="Đăng nhập">
                            </div>
                            <li>
                                <a href="index.php?page=quenmatkhau">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="index.php?page=dangki">Đăng kí thành viên</a>
                            </li>
        
                        </form>
                        <p><?php if(isset($thongbao)&& $thongbao !="") echo $thongbao ?></p>
                          <?php } ?>
                    
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Danh mục</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                         
                             foreach ($listdanhmuc as $danhmuc) {
                                 $linkdanhmuc = "index.php?page=sanpham&iddm=".$danhmuc['id'];
                            ?>
                                 <li><a href="<?php echo $linkdanhmuc ?>"><?php echo $danhmuc['category_name'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="boxfooter searchbox">
                        <form action="" method="post">
                             <input type="text" name="" id="" placeholder="Từ khoá tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">Top 10 yêu thích</div>
                    <div class="row boxcontent">
                        <?php foreach ($listtop10 as $sanpham) { 
                             $linksanpham = "index.php?page=sanphamchitiet&idsp=".$sanpham['id'];
                        ?>
                            <div class="row mb10 top10">
                            <img src="../upload/<?php echo $sanpham['image'] ?>" alt="" width="100">
                            <a href="<?php echo $linksanpham ?>"><?php echo $sanpham['product_name'] ?></a>
                        </div>
                        <?php } ?>
                      
                    
                    </div>
                </div>