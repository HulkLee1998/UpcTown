<?php
function connsql() {
    
    $servername = "localhost";//mysql地址
    $username = "root";//用户名
    $password = "123456";//密码
    $dbname = "studentinfo";//数据库名称
    $timezone="Asia/Shanghai";//时区
    
    
    // 创建连接
    $conn = new mysqli($servername, $username, $password,$dbname);
    // 检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    
    
    $conn->query("SET names UTF8");
    $conn->query("SET time_zone = '+8:00'");
    date_default_timezone_set($timezone);
    
    return $conn;    
}

?>