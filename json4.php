<?php

include_once("connect.php");
$conn=connsql();

$sql = "select * from xiaofei_month" ;
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
    $arr[] = (int)$row['mon.1'];
    $arr[] = (int)$row['mon.2'];
    $arr[] = (int)$row['mon.3'];
    $arr[] = (int)$row['mon.4'];
    $arr[] = (int)$row['mon.5'];
    $arr[] = (int)$row['mon.6'];
    $arr[] = (int)$row['mon.7'];
    $arr[] = (int)$row['mon.8'];
    $arr[] = (int)$row['mon.9'];
    $arr[] = (int)$row['mon.10'];
    $arr[] = (int)$row['mon.11'];
    $arr[] = (int)$row['mon.12'];
}

echo json_encode($arr,JSON_UNESCAPED_UNICODE);
$conn->close();
//输出全体学生一卡通月消费额，按月份顺序；
?>

