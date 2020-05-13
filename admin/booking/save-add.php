<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$check_in = trim($_POST['check_in']);
$check_out = trim($_POST['check_out']);
$name = $_SESSION[AUTH]['name'];
$email = $_SESSION[AUTH]['email'];
$room_id = trim($_POST['room_id']);
$room_stype = trim($_POST['room_stype']);
$adult = trim($_POST['adult']);
$children = trim($_POST['children']);
// validate bằng php
$checkinerr = "";
$checkouterr = "";
$roomerr = "";

$diff = strtotime($check_out)-strtotime($check_in);
$total_date = round($diff/(60*60*24));
$today = date("m/d/Y");
$diff_today = strtotime($check_in)-strtotime($today);
$total_today = round($diff_today/(60*60*24));



if(strlen($check_in)==0){
    $checkinerr="Yêu cầu nhập ngày đến khách sạn";
}
if($checkinerr==""&&$total_date<=0){
    $checkinerr = "Yêu cầu nhập ngày đến nhỏ hơn ngày rời";
}
if($checkinerr==""&&$total_today<0){
    $checkinerr = "Yêu cầu nhập ngày đến lớn hơn hoặc bằng hiện tại";
}
if(strlen($check_out)==0){
    $checkouterr="Yêu cầu nhập ngày rời đi";
}
if($checkinerr.$checkouterr!=""){
    header('location:' .BASE_URL."single-room.php?checkinerr=$checkinerr&&checkouterr=$checkouterr");
    die;
}
else{
      $getRoomPriceQuery = "select * from room_types where id = '$room_id'";
      $roomPrice = queryExecute($getRoomPriceQuery, false);
      
      $date1= date_create($check_in);
      $date2= date_create($check_out);
      
      $diff=date_diff($date1,$date2);
      $total_date = $diff->format('%a');
      
      
      $total = $total_date * $roomPrice['price'];
      // query upload to DB
      $insertBookingQuery = "insert into booking
                                (check_in, check_out, name, email, room_stype, room_id, adults, children, total_price)
                          values
                                ('$check_in','$check_out', '$name', '$email', '$room_stype', '$room_id', '$adult', '$children', '$total')";
      // dd($insertBookingQuery);
      queryExecute($insertBookingQuery, false);
      
      $getBookingQuery = "select * from booking where room_id = $room_id order by id desc";
      $booking = queryExecute($getBookingQuery, false);
      
      header("location: " . BASE_URL . "cart.php?id=".$booking['id'].'&'.'mesge=active');
      die;
}

