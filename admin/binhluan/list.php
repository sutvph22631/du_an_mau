<div class="row">
            <div class="row fromtitle">
                <h1>Danh Sách Bình Luận</h1>
            </div>
            <div class="row fromcontent">
                <div class="row mb10 fromdsloai">
                    <table>
                        <tr>
                           
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>iduser</th>
                            <th>idpro</th>
                            <th>Ngày bình luận</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach($listbinhluan as $binhluan){
                            extract($binhluan);
                            
                            
                            $xoabl="index.php?act=xoabl&id=".$id;
                            echo '    <tr>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td>   <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                
                        }
                        ?>

                    </table>
                </div>
                   
                
            </div>        
        </div>