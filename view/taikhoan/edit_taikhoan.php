<div class="row mr ">
    <div class="boxtrai mr ">

        <div class="row mb">
            <div class="boxtitle">Cập nhật tài khoản</div>
            <div class=" row boxcontent formtaikhoan">
                <?php 
                if(isset($_SESSION['user'])&& (is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                 ?>
                <form action="index.php?act=edit_taikhoan" method="POST">
                    <div class="row mb10">
                        Tên Đăng Nhập
                        <br>
                        <input type="user" name="user" class="input" required value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        Mật Khẩu
                        <br>
                        <input type="password" name="password" required value="<?=$password?>">
                    </div>
                    <div class="row mb10">
                        Email
                        <br>
                        <input type="email" name="email" required value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" name="NHập Lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="boxphai ">
        <?php
        include_once "view/boxright.php";
        ?>
    </div>
</div>