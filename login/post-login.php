<?php
session_start();
require_once "../config/utils.php";
$email = isset($_POST['email']) == true ? trim($_POST['email']) : "";
$password = isset($_POST['password']) == true ? trim($_POST['password']) : "";

$sql = "select * from users where email = '$email'";
$loggedInUser = queryExecute($sql, false);
if(password_verify($password, $loggedInUser['password'])){
    $_SESSION[AUTH] = $loggedInUser;
    header('location: ../index.php?msg=Bạn đã đăng nhập thành công!');
    die;
}else{
    header('location: ../index.php?msg=Sai thông tin đăng nhập!');
    die;
}
