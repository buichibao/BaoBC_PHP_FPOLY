
<div class="cart convertContent">
    <article>
        <div class="grid">
        <p class="btn add" id="addproduct" style="margin-left: 1px;">Thêm mới <i class="fas fa-add"></i></p>

        <form style="display: inline-block;" action="" class="searchCategoryName" >
            <div style="display: flex;align-items: center;margin-left: 1000px;" >
                <div style="border: 1px solid black;width: 300px;height: 40px;" class="input-box">
                    <input style="width: 220px;height: 100%;" type="text" name="category_name" >
                </div>
                <input type="submit"  style="width:100%;height:40px;background-color: #27ae60; color:aliceblue;cursor: pointer;border-top-right-radius:5px;border-bottom-right-radius:5px">
            </div>
        </form>

            <div class="product_container">
                <div class="title">
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item">ID</div>
                    <div class="item">Tên danh mục</div>
                    <div class="item"></div>
                    <div class="item">Chỉnh sửa</div>
                    <div class="item">Xoá</div>
                </div>
           
                <div class="wrapper">

                </div>
                
     
        </div>
    </article>
</div>
<div class="popup-update-category">
    <div class="wrapper">
        <form class="form-update-category">
            <h1>Update category</h1>
            <input type="text" name="ID" hidden>
            <div class="input-box">
                <label for="">Category</label>
                <input type="text" id="category_name" name="category_name">
                <span class="message"></span>
            </div>
            <div class="wrapper-submit">
            <input type="submit">

            </div>
        </form>
    </div>
</div>

<div class="popup-add-category">
    <div class="wrapper">
        <form class="form-add-category">
            <h1>Add category</h1>
            <div class="input-box">
                <label for="">Category</label>
                <input type="text" id="category_name" name="category_name">
                <span class="message"></span>
            </div>
            <div class="wrapper-submit">
            <input type="submit">

            </div>
        </form>
    </div>
</div>