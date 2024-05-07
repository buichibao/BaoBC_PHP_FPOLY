<form action="index.php" method="get" name="form">

<label for="username">Username </label>  
<input type="text" name="username" id="username"/> 
</br>

<label for="password"> password </label>  
<input type="password" name="password" id="password"/>
 </br>

<label for="namsinh">  năm sinh </label>  
<input type="date" name="namsinh" id="namsinh"/>
 </br>

Giới tính
<input type="radio" name="giotinh" value="nam" id="nam" checked>
<label for="nam">Nam</label>
<input type="radio" name="giotinh" value="nu" id="nu">
<label for="nu">Nữ</label>
</br>

 <label for="">Bạn có đồng ý không ? </label>
 <input type="checkbox" value="yes" name="check" checked/>    
</br>

 Quốc tịch <select>
              <option value="vietnam">Việt Nam</option>
              <option value="usa">USA</option>
              <option value="anh">Anh</option>
              <option value="lao">Lào</option>
            </select> 
          </br>  
          
<label for="binhluan">  Bình luận  </label>  
<textarea rows="5" id="binhluan" name="binhluan">Nội dung bình luận</textarea>
</br>
 <button type="submit">Gửi</button>

</form>

<?php

?>