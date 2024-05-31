
<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row mt10 ml">
               <form action="index.php?page=listsanpham" method="post">
                 <select name="categoryid">
                 <option value ="0" selected>Tất cả</option>
                <?php foreach ($listdanhmuc as $danhmuc) { ?>
                    <option value = "<?php echo $danhmuc['id'] ?>" ><?php echo $danhmuc['category_name'] ?></option>
                <?php } ?>
               </select>
               <input type="submit" name="search" value="Tìm kiếm"> 
               </form>
            </div>
            <div class="row formcontent">
               <div class="row mb10 formdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php foreach ($listsanpham as $sanpham) { ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?php echo $sanpham['id'] ?></td>
                        <td><?php echo $sanpham['product_name'] ?></td>
                        <td><img src="../upload/<?php echo $sanpham['image'] ?>" alt="" width="80px" height="80px" style="margin-left: 50px;"></td>
                        <td><?php echo $sanpham['price'] ?></td>
                        <td><?php echo $sanpham['view'] ?></td>
                        <td><a href="index.php?page=suasanpham&id=<?php echo $sanpham['id'] ?>"><input type="button" value="Sửa"></a>  <a href="index.php?page=deletesanpham&id=<?php echo $sanpham['id']?>"><input type="button" value="Xoá" name="delete"></a></td>
                    </tr>
                  <?php } ?>
                </table>
               </div>
               <p><?php if(isset($success) && ($success!="")) echo "$success" ?></p>
               <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ tất cả">
                <input type="button" value="Xoá tất cả sản phẩm đã chọn">
                <a href="index.php?page=addsanpham"><input type="button" value="Nhập thêm"></a>
               </div>
            </div>
            
         </div>