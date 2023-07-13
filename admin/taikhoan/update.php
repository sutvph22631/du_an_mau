<?php
if (is_array($tk)) {
    extract($tk);
}
?>
<div class="row">
    <div class="row fromtitle">
        <h1>Cập Nhật Khách Hàng</h1>
    </div>
    <div class="row fromcontent">
        <form action="index.php?act=updatetk" method="POST" >
            <div class="row mb10">
                Tên Đăng Nhập
                <br>
                <input type="user" name="user" class="input" value="<?=$user?>">
            </div>
            <div class="row mb10">
                Mật Khẩu
                <br>
                <input type="password" name="password" value="<?=$password?>">
            </div>
            <div class="row mb10">
                Email
                <br>
                <input type="email" name="email" value="<?=$email?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" value="Cập Nhật" name="capnhat">
                <input type="reset" name="NHập Lại">
            </div>
        </form>
    </div>
</div>
</div>