<?php

include_once("connect.php");
$conn=connsql();
$username=$_GET['account'];
$password=$_GET['password'];
$sql = "select * from admin where username='" . $username . "' and password='" . $password . "'";
$result=$conn->query($sql);

if($row=$result->fetch_assoc()){
    echo '1';
}
else echo '0';
$conn->close();
?>
