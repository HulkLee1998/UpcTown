<?php
function quesql($k,$v) {
    include_once("connect.php");
    $conn=connsql();
    
    $sql = "select " . $k . " from " . $v . " order by id asc" ;
    $result=$conn->query($sql);
    
    while($row=$result->fetch_assoc()){
        $arr[] = $row[$k];
    }
    
    echo json_encode($arr);
    $conn->close();
}

?>