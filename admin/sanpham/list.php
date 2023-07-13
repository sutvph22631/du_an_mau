<div class="row">
            <div class="row fromtitle mb">
                <h1>Danh Sách Sản Phẩm</h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw" >
                        <select name="iddm" >
                            <option value="0" selected>Tất Cả</option>
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        ?>
                        
                    </select>
                    <input type="submit" name="listok" value="GO">
                    </form>
            <div class="row fromcontent">
                <div class="row mb10 fromdsloai">
                
                    <table>
                        <tr>
                            
                            <th>Mã Sản Phẩm</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Hình Sản Phẩm</th>
                            <th>Giá Sản Phẩm</th>
                            <th>Lượt Xem</th>
                            <th>Chức Năng</th>
                        </tr>
                        <?php
                        foreach($listsanpham as $sanpham){
                            extract($sanpham);
                            $suasp="index.php?act=suasp&id=".$id;
                            $xoasp="index.php?act=xoasp&id=".$id;
                            $hinhpath="../upload/".$img;
                            if (is_file($hinhpath)) {
                                $hinh="<img src='".$hinhpath."' height='80'>";
                            }else{
                                $hinh=" không có hình";
                            }
                            echo '    <tr>
                           
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$price.'</td>
                            <td>'.$luotxem.'</td>                   
                            <td> <a href="'.$suasp.'"><input type="button" value="Sửa"></a>  <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>

                            </tr>';
                
                        }
                        ?>

                    </table>
                </div>
                    
                
            </div>        
        </div>