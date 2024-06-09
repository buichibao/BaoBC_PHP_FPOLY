<div class="row mb">
            <div class="boxtrai mr">
                <div class="row"><?php echo $tendanhmuc ?></div>
                <div class="row">
                   <?php foreach ($listsanphamiddm as $sanpham) { 
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