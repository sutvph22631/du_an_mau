<div class="row mr ">
    <div class="boxtrai mr ">

        <div class="row mb">
            <div class="boxtitle">Đăng Ký Thành Viên</div>
            <div class=" row boxcontent formtaikhoan">
                <form action="index.php?act=dangky" method="POST">
                    <div class="row mb10">
                        Tên Đăng Nhập
                        <br>
                        <input type="user" name="user" class="input" required>
                    </div>
                    <div class="row mb10">
                        Mật Khẩu
                        <br>
                        <input type="password" name="password" required>
                    </div>
                    <div class="row mb10">
                        Email
                        <br>
                        <input type="email" name="email" required>
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng Ký" name="dangky">
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