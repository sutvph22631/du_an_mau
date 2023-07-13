<div class="row">
            <div class="row fromtitle">
                <h1>Danh Sách Loại Hàng</h1>
            </div>
            <div class="row fromcontent">
                <div class="row mb10 fromdsloai">
                    <table>
                        <tr>
                           
                            <th>Mã Loại</th>
                            <th>Tên Loại</th>
                            <th>Chức Năng</th>
                        </tr>
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;
                            echo '    <tr>
                           
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td> <a href="'.$suadm.'"><input type="button" value="Sửa"></a>  <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                
                        }
                        ?>

                    </table>
                </div>
                    
                
            </div>        
        </div>