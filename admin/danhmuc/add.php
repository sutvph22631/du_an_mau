<div class="row">
            <div class="row fromtitle">
                <h1>Thêm Mới Danh Mục</h1>
            </div>
            <div class="row fromcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã Loại<br>
                    <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên Loại<br>
                    <input type="text" name="tenloai" >
                    </div>
                    <div class="row mb10">
                        <input type="submit"name="themmoi" value="Thêm Mới">
                        <input type="reset" value="Nhập Lại">
                       <a href="index.php?act=listdm"> <input type="button" value="Danh Sách"></a>
                    </div>
                    <?php
                    if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>        
        </div>
        </div>