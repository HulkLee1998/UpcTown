<?php

include_once("connect.php");
$conn=connsql();

$sql = "select active from mapdata order by id asc";
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
	$arr[] = $row['active'];
}

echo json_encode($arr);

$conn->close();

?>