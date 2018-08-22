<?php

include_once("connect.php");
$conn=connsql();

$sql = "select renshu from from_jiguan order by ID asc";
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
	$arr[] = $row['renshu'];
}

echo json_encode($arr);

$conn->close();

?>