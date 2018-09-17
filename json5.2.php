<?php

include_once("connect.php");
$conn=connsql();

$sql = "select * from student where score>0 order by score desc limit 10" ;
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
    $arr[] = $row['name'];
    $arr[] = $row['id'];
    $arr[] = $row['sex'];
    $arr[] = $row['jiguan'];
    $arr[] = $row['xueyuan'];
    $arr[] = $row['zhuanye'];
    $arr[] = $row['nianji'];
    $arr[] = $row['score'];
}
   
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
$conn->close();
//输出学分绩前十学生的 姓名，学院，年级，省份，学分绩；
?>