<div class="row">
            <div class="row fromtitle">
                <h1>Danh Sách Khách Hàng</h1>
            </div>
            <div class="row fromcontent">
                <div class="row mb10 fromdsloai">
                    <table>
                        <tr>
                            
                            <th>id</th>
                            <th>Tên đăng nhập</th>
                            <th>Mật khẩu</th>
                            <th>email</th>
                            <th>role</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach($listtaikhoan as $taikhoan){
                            extract($taikhoan);
                            if($role==0){
                            $suatk="index.php?act=suatk&id=".$id;
                            $xoatk="index.php?act=xoatk&id=".$id;
                            echo '    <tr>
                            
                            
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$password.'</td>
                            <td>'.$email.'</td>
                            <td>'.$role.'</td>
                            <td> <a href="'.$suatk.'"><input type="button" value="Sửa"></a>  <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                
                        }
                    }
                        ?>

                    </table>
                </div>
                    
                
            </div>        
        </div>