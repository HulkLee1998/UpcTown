<?php

include_once("connect.php");
$conn=connsql();

$sql = "select * from xiaofei_sex" ;
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
    $arr[] = $row['sum_nan'];
    $arr[] = $row['sum_nv'];
    $arr[] = $row['avg_nan'];
    $arr[] = $row['avg_nv'];
}

echo json_encode($arr,JSON_UNESCAPED_UNICODE);
$conn->close();

//输出全体男女学生一卡通年消费额，男女学生人均年消费额；
?>
