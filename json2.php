<?php

include_once("connect.php");
$conn=connsql();

$sql = "select nan,nv from zsex_jiguan order by id asc" ;
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
    $arr[] = $row['nan'];
    $arr[] = $row['nv'];
}

echo json_encode($arr,JSON_UNESCAPED_UNICODE);
$conn->close();
//输出各个省份的男女学生人数，按省份id顺序；
?>

