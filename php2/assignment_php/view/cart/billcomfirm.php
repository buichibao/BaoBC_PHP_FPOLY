
<div class="billcomfirm">
<div class="thank">Cảm ơn bạn đã đặt hàng</div>
<div class="thank">Đơn hàng sẽ được giao đến bạn 1 cách sớm nhất</div>
<div class="id_bill">Mã Hoá Đơn : HD <?=$bill['id']?></div>
<div>
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
     
    </table>
    </div>
</div>