<div class="cart convertContent">
    <article>
        <div class="grid">
            <div class="product_container">
                <div class="title">
                    <div class="item">STT</div>
                    <div class="item">Mã đơn hàng</div>
                    <div class="item">Ngày Đặt</div>
                    <div class="item">Số lượng mặt hàng</div>
                    <div class="item">Tổng đơn hàng</div>
                    <div class="item">Tình trạng đơn</div>
                  
                </div>
                <?php 
                  $index = 1;
                  $status="";
                  if(is_array($danhsachhoadon)){
                  foreach ($danhsachhoadon as $bill) {
                    extract($bill);
                    $status = get_bill_status($bill['bill_stats']);
                    $quantity =count(count_product_in_bill($bill['id'])) ;
                    ?>
                <div class="title-list">
                    <div class="item"><?=$index?></div>
                    <div class="item"><?=$bill['id']?></div>
                    <div class="item"><?=$bill['dateoder']?></div>
                    <div class="item"><?=$quantity?></div>
                    <div class="item"><?=$bill['totalamount']?></div>
                    <div class="item"><?=$status?></div>
               </div> 
                  <?php
                   $index++;
                  } 
              }?>
        </div>
    </article>
</div>