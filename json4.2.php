<?php

include_once("connect.php");
$conn=connsql();

$sql = "select xiaofei from xiaofei_nianji order by nianji asc" ;
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
    $arr[] = (int)$row['xiaofei'];
}

echo json_encode($arr,JSON_UNESCAPED_UNICODE);
$conn->close();
//输出各个年级学生一卡通年消费额，按年级循序；
?>

