<section class="order" id="order" style="margin-top: 50px;">

    <h3 class="sub-heading">BuiChiBao</h3>
    <h1 class="sub-heading">Cập nhật trạng đơn hàng</h1>

    <form action="index.php?page=saveupdatebill" method="post"   enctype="multipart/form-data">
       <?php 
          if(is_array($bill)){
            extract($bill);
          }
       ?>
        <div class="inputBox">
            <div class="input">
                <span>Mã hoá đơn</span>
                <input type="text"  name="id" placeholder="Nhập tên sản phẩm" value="<?=$id?>" disabled>
                <input type="text"  name="id"  value="<?=$id?>" hidden>
               
            </div>
            <div class="input">
                <span>Tên khách hàng</span>
                <input type="text"  placeholder="Nhập giá bán" value="<?=$bill_username?>" disabled>
            </div>
        </div>

        <div class="inputBox">  
            <div class="input">
                <span>Địa chỉ giao hàng</span>
                <input type="text" placeholder="Nhập mô tả" value="<?=$bill_address?>" disabled>
            </div>

            <div class="input">
                <span>Tổng đơn hàng</span>
                <input type="text" placeholder="Nhập mô tả" value="<?=$totalamount?>" disabled>
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Tình trạng đơn hàng</span>
                <select name="status" style="margin-top: 5px;margin-bottom: 5px;">
                       <option value="0">Đơn đơn hàng mới</option>
                       <option value="1">Đang xử lý</option>
                       <option value="2">Đang giao hàng</option>
                       <option value="3">Hoàn tất</option>
                </select>
            </div>
            <div>
                <h2 style="color: #27ae60;"><?php if(isset($notification) && ($notification !="")) echo $notification?></p>
            </div>

        </div>

        <input type="submit" value="Cập nhật" class="btn" name="save">
    </form>
</section>