<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql = "SELECT *FROM binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.="order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function load_bl(){
    $sql = "SELECT *FROM binhluan order by id desc";
    $bll= pdo_query($sql);
    return $bll;
}
function delete_binhluan($id){
    $sql = "DELETE FROM binhluan where id=" . $id;
    pdo_execute($sql);
}
?>