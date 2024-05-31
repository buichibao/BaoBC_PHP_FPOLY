<div class="row mb">
            <div class="boxtrai mr">
                <div class="row mb">
                    <div class="banner">
                         <div class="slideshow-container">
                          <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="https://media.licdn.com/dms/image/C5112AQEpMXp0uB6cRQ/article-inline_image-shrink_1000_1488/0/1520143360667?e=1721865600&v=beta&t=of4oY9h5YNPoil7xBe-MGE48kljEe79wHE8_uPYaxdw" style="width:100%">
                            <div class="text">Caption Text</div>
                          </div>
                          <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm4jpHCsybaGw7JDa7v1_zFbhikEU03fkmIw&s" style="width:100%">
                            <div class="text">Caption Two</div>
                          </div>
                          <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="https://servicewatch.vn/wp-content/uploads/2017/08/banner1.jpg" style="width:100%">
                            <div class="text">Caption Three</div>
                          </div>
                          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                          <a class="next" onclick="plusSlides(1)">&#10095;</a>
                          </div>
                          <br>
                          <div style="text-align:center">
                          <span class="dot" onclick="currentSlide(1)"></span>
                          <span class="dot" onclick="currentSlide(2)"></span>
                          <span class="dot" onclick="currentSlide(3)"></span>
                          </div>
                    </div>
                </div>
                <div class="row">
                   <?php foreach ($sanphammoi as $sanpham) { ?>
                      <div class="boxsp mr">
                        <div class="row img"><img src="../upload/<?php echo $sanpham['image'] ?>" alt=""></div>
                        <p><?php echo  $sanpham['price'] ?></p>
                        <p><?php echo  $sanpham['product_name'] ?></p>
                        <a href=""></a>
                    </div>
                    <?php   } ?>
                    
                  
                    
                </div>
            </div>
            <div class="boxphai">
                <div class="row mb ">
                    <div class="boxtitle">Tài khoản</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="" method="post">
                            <div class="row mb10">
                            Tên đăng nhập</br>
                            <input type="text" name="user" id="">
                            </div>
                            <div class="row mb10">
                            Mật khẩu <br>
                            <input type="password" name="pass" id="">
                            </div>
                            <div class="row mb10">
                            <input type="checkbox" name="" id="">Ghi nhớ tài khoản
                            </div>
                            <div class="row mb10">
                            <input type="submit" value="Đăng nhập">
                            </div>
                            <li>
                                <a href="">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="">Đăng kí thành viên</a>
                            </li>
        
                        </form>
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
                             $linksanpham = "index.php?page=sanpham&idsp=".$sanpham['id'];
                        ?>
                            <div class="row mb10 top10">
                            <img src="../upload/<?php echo $sanpham['image'] ?>" alt="" width="100">
                            <a href="<?php echo $linksanpham ?>"><?php echo $sanpham['product_name'] ?></a>
                        </div>
                        <?php } ?>
                      
                    
                    </div>
                </div>
            </div>
        </div>