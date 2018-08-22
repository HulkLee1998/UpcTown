<?php

include_once("connect.php");
$conn=connsql();

$sql = "select num from zfrom_jiguan order by id asc";
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
	$arr[] = $row['num'];
}

echo json_encode($arr);

$conn->close();

?>