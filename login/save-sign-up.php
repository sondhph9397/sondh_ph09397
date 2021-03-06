<?php
session_start();
include_once "../config/utils.php";
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$cfpassword = trim($_POST['cfpassword']);
$number_phone = trim($_POST['number_phone']);
$role_id = trim($_POST['role_id']);
$status = trim($_POST['status']);
// validate bằng php
$nameerr = "";
$emailerr = "";
$passworderr = "";
// check name
if (strlen($name) < 2 || strlen($name) > 191) {
    $nameerr = "Yêu cầu nhập tên tài khoản nằm trong khoảng 2-191 ký tự";
}

// check email
if (strlen($email) == 0) {
    $emailerr = "Yêu cầu nhập email!";
}
if ($emailerr == "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailerr = "Không đúng định dạng email";
}
// check email đã tồn tại hay chưa
$checkEmailQuery = "select * from users where email = '$email'";
$users = queryExecute($checkEmailQuery, true);
if ($emailerr == "" && count($users) > 0) {
    $emailerr = "Email đã tồn tại, vui lòng sử dụng email khác";
}
// check password
if (strlen($password) < 6) {
    $passworderr = "Mật khẩu cần >= 6 ký tự";
}

if ($passworderr == "" && $password != $cfpassword) {
    $passworderr = "Mật khẩu và nhập lại mật khẩu không khớp nhau";
}

if ($nameerr . $emailerr . $passworderr != "") {
    header('location: ' . BASE_URL . "sign-up.php?nameerr=$nameerr&emailerr=$emailerr&passworderr=$passworderr");
    die;
}
// mã hóa mật khẩu
$password = password_hash($password, PASSWORD_DEFAULT);
// upload file ảnh
$insertUserQuery = "insert into users
                          (name, number_phone, email, password, status, role_id)
                    values
                          ('$name', '$number_phone', '$email', '$password', '$status', '$role_id')";
            //var_dump($insertUserQuery);
queryExecute($insertUserQuery, false);
header("location: " . BASE_URL);
die;