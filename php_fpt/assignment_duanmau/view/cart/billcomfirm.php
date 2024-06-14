
<div class="billcomfirm">
<div class="thank">Cảm ơn bạn đã đặt hàng</div>
<div class="thank">Đơn hàng sẽ được giao đến bạn 1 cách sớm nhất</div>
<div class="id_bill">Mã Hoá Đơn : HD <?=$bill['id']?></div>
<div class="hd">
    <?php 
    if(isset($bill)&& is_array($bill)){
       extract($bill);
       }
    ?>
<table class="infor_user">
            <tr>
                <td>Người Đặt</td>
                <td><?=$bill_username?></td>
            </tr>
            <tr>
                <td>Địa Chỉ</td>
                <td><?=$bill_address?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?=$bill_email?></td>
            </tr>
            <tr>
                <td>Điện Thoại</td>
                <td><?=$bill_phonenumber?></td>
            </tr>
            <tr>
                <td>Ngày đặt hàng</td>
                <td><?=$dateoder?></td>
            </tr>
        
        </table>
      
    <table class="infor_product">
            <tr>
                <td>Tên sản phẩm</td>
                <td>Đơn giá</td>
                <td>Số lượng</td>
                <td>Thành Tiền</td>
            </tr>
            <?php
                if(isset($listbill) && is_array($listbill)){
                    $total_amount = 0;
                    foreach ($listbill as $item) {
                       extract($item); 
                       $total = $item['price'] * $item['quantity'];
                       $total_amount +=  $total;
                       ?>
            <tr>
                <td><?php echo $item['productname']?></td>
                <td><?php echo $item['price']?></td>
                <td><?php echo $item['quantity']?></td>
                <td><?php echo $total ?></td>
            </tr>
            <?php        }
                }
            ?>
    </table>
    <p>Tổng tiền thanh toán :  <?php echo  $total_amount ?></p>
    </div>
</div>