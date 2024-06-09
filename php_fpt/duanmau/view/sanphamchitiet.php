<div class="row mb">
            <div class="boxtrai mr">
                <div class="row mb">
                <?php  extract($sanpham); ?>
                <div class="boxtitle"><?=$product_name?></div>
                <div class="row boxcontent">
                    <?php 
                      $image = "../upload/".$image;
                      echo '<div class="row mb spct"> <img src="'.$image.'" width="300"></div>';
                      echo $description;
                    ?>
                    
                </div>
                </div>
                <div class="row mb">
                <div class="boxtitle">BÌNH LUẬN</div>
                <div class="row boxcontent"></div>
                </div>
                <div class="row mb">
                <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
                <div class="row boxcontent">
                    <ul>
                        <?php 
                        foreach($listsanphamcungloai as $sanpham){ 
                            extract($sanpham);
                            $linksanpham ="index.php?page=sanphamchitiet&idsp=$id";
                        ?>
                         <li><a href="<?php echo $linksanpham ?>"><?php echo $sanpham['product_name']?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                </div>
            </div>
            
                    
            <div class="boxphai">
                <?php include '../view/boxright.php'  ?>
            </div>
</div>