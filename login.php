<?php
ob_start();
ob_end_clean();
include_once("connect.php");
$conn=connsql();
$username=$_POST['account'];
$password=$_POST['password'];
$sql = "select * from admin where username='" . $username . "' and password='" . $password . "'";
$result=$conn->query($sql);
$abc="abc";
$z="z";
if($row=$result->fetch_assoc()){
    echo $abc;}
else echo $z;
$conn->close();
?>

