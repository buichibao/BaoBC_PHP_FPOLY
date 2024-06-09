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
                   <?php foreach ($sanphammoi as $sanpham) { 
                       extract($sanpham);
                       $linksanpham ="index.php?page=sanphamchitiet&idsp=$id";
                    ?>
                      <div class="boxsp mr">
                        <div class="row img"><a href="<?php echo$linksanpham?>"><img src="../upload/<?php echo $sanpham['image'] ?>" alt=""></a></div>
                        <p><?php echo  $sanpham['price'] ?></p>
                        <p><a href="<?php echo$linksanpham?>"><?php echo  $sanpham['product_name'] ?></a></p>
                        <a href=""></a>
                    </div>
                    <?php   } ?>
                    
                  
                    
                </div>
            </div>
            <div class="boxphai">
                <?php include '../view/boxright.php'  ?>
            </div>
        </div>