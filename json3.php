<?php

include_once("connect.php");
$conn=connsql();

$sql = "select * from znum_xueyuan order by id asc" ;
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
    $arr[] = $row['2014'];
    $arr[] = $row['2015'];
    $arr[] = $row['2016'];
    $arr[] = $row['2017'];
}

echo json_encode($arr,JSON_UNESCAPED_UNICODE);
$conn->close();
//输出各个学院的各级学生人数，按学院id顺序
?>


