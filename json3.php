<?php

include_once("connect.php");
$conn=connsql();

$sql = "select * from znum_xueyuan where id<>12 order by id asc" ;
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
    $arr[] = (int)$row['2014'];
    $arr[] = (int)$row['2015'];
    $arr[] = (int)$row['2016'];
    $arr[] = (int)$row['2017'];
}
    $arr[] = "2014级";
    $arr[] = "2015级";
    $arr[] = "2016级";
    $arr[] = "2017级";
    

echo json_encode($arr,JSON_UNESCAPED_UNICODE);
$conn->close();
//输出各个学院的各级学生人数，按学院id顺序
?>


