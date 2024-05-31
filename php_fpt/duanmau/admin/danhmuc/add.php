<div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI DANH MỤC</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?page=adddanhmuc" method="post">
                    <div class="row mb10">
                         Mã loại <br>
                        <input type="text" name="id" id="" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="categoryname" id="">
                    </div>
                    <div class="row">
                        <input type="submit" value="THÊM MỚI" name="add">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?page=listdanhmuc"><input type="button" value="DANH SÁCH" name="list"></a>
                    </div>
                </form>
                <p><?php if(isset($success) && ($success!="")) echo "$success" ?></p>
            </div>
         </div>
</div>