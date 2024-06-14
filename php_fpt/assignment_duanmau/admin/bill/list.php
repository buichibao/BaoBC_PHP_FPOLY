
<div class="cart convertContent">
    <div>
     <form action="index.php?page=searchcommentbyproductname" method="post" style="margin: 0px 0px 10px 10px;">
        <input type="text" style="border-radius:0;padding: 5px 45px;background-color:white; border: 2px solid #27ae60;color:#192a56;" class="btn" name="productname" placeholder="Nhập tên sản phẩm">
        <input type="submit" name="search" class="btn" value="Tìm kiếm" style="background-color: #27ae60;border-radius:0">    
    </form>   
    </div>
    <article>
        <div class="grid">
            <div class="product_container">
            <div class="title">
                    <div class="item">ID</div>
                    <div class="item">Khách Hàng</div>
                    <div class="item">Số lượng mặt hàng</div>
                    <div class="item">Tổng đơn hàng</div>
                    <div class="item">Tình trạng đơn</div>
                    <div class="item"></div>
                  
                </div>
                <?php 
                if(is_array($listbill)){
                   foreach ($listbill as $bill) {
                    extract($bill);
                    $status = get_bill_status($bill['bill_stats']);
                    $quantity =count(count_product_in_bill($bill['id'])) ;
                ?>
                <div class="title-list">
        
                    <div class="item"><?=$bill['id']?></div>
                    <div class="item"><?=$bill['user_id']?></div>
                    <div class="item"><?=$quantity?></div>
                    <div class="item"><?=$bill['totalamount']?></div>
                    <div class="item"><?=$status?></div>
                    <div class="item"><a href="index.php?page=deletecomment&id=<?=$id_c?>"><i class='bx bx-trash'></i></a></div>
                </div>
                   
                <?php }
                } ?>
        </div>
    </article>
</div>