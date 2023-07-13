<?php
function insert_taikhoan($user,$pass,$email){
    $sql = "INSERT INTO taikhoan(user,password,email) values('$user','$pass','$email')";
        pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql = "SELECT * FROM taikhoan where user='".$user."' AND password='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql = "SELECT * FROM taikhoan where email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id, $user,$pass,$email){
    
    $sql="UPDATE taikhoan set user='".$user."',password='".$pass."',email='".$email."' where id=".$id;
   
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql = "SELECT *FROM taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id){
    $sql = "DELETE FROM taikhoan where id=" . $id;
    pdo_execute($sql);
}
function loadone_taikhoan($id){
    $sql = "SELECT * FROM taikhoan where id=".$id;
    $tk = pdo_query_one($sql);
    return $tk;
}
?>