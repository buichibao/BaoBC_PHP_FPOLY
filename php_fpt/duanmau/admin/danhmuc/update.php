<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT DANH MỤC</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?page=updatedanhmuc" method="post">
                    <?php  ?>
                    <div class="row mb10">
                         Mã loại <br>
                        <input type="text" value="<?php echo $danhmuc['id'] ?>" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="categoryname" id=""  value="<?php echo $danhmuc['category_name'] ?>">
                        <input type="text" name="id" id="" value="<?php echo $danhmuc['id'] ?>" hidden>
                    </div>
                    <div class="row">
                        <input type="submit" value="LƯU THAY ĐỔI" name="update">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?page=listdanhmuc"><input type="button" value="DANH SÁCH" name="list"></a>
                    </div>
                </form>
                <p><?php if(isset($success) && ($success!="")) echo "$success" ?></p>
            </div>
         </div>
</div>