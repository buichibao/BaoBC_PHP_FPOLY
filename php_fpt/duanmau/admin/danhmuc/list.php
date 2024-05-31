
<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row formcontent">
               <div class="row mb10 formdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                    <?php foreach ($listdanhmuc as $danhmuc) { ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?php echo $danhmuc['id'] ?></td>
                        <td><?php echo $danhmuc['category_name'] ?></td>
                        <td><a href="index.php?page=suadanhmuc&id=<?php echo $danhmuc['id'] ?>"><input type="button" value="Sửa"></a>  <a href="index.php?page=deletedanhmuc&id=<?php echo $danhmuc['id']?>"><input type="button" value="Xoá" name="delete"></a></td>
                    </tr>
                  <?php } ?>
                </table>
               </div>
               <p><?php if(isset($success) && ($success!="")) echo "$success" ?></p>
               <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ tất cả">
                <input type="button" value="Xoá tất cả danh mục đã chọn">
                <a href="index.php?page=adddanhmuc"><input type="button" value="Nhập thêm"></a>
               </div>
            </div>
            
         </div>