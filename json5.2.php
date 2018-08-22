<?php

include_once("connect.php");
$conn=connsql();

$sql = "select * from  order by id asc" ;
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
    $arr[] = $row[''];
    $arr[] = $row[''];
    $arr[] = $row[''];
    $arr[] = $row[''];
}

echo json_encode($arr,JSON_UNESCAPED_UNICODE);
$conn->close();
//输出学分绩前十学生的 姓名，学院，年级，省份，学分绩；
?>