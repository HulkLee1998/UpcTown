<?php

include_once("connect.php");
$conn=connsql();

$sql = "select * from xiaofei_month" ;
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
    $arr[] = $row['mon.1'];
    $arr[] = $row['mon.2'];
    $arr[] = $row['mon.3'];
    $arr[] = $row['mon.4'];
    $arr[] = $row['mon.5'];
    $arr[] = $row['mon.6'];
    $arr[] = $row['mon.7'];
    $arr[] = $row['mon.8'];
    $arr[] = $row['mon.9'];
    $arr[] = $row['mon.10'];
    $arr[] = $row['mon.11'];
    $arr[] = $row['mon.12'];
}

echo json_encode($arr,JSON_UNESCAPED_UNICODE);
$conn->close();
?>

//输出全体学生一卡通月消费额，按月份顺序；