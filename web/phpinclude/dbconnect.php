<?php
$sn = "localhost";
$un = "root";
$pd = "";
$db = "dobu_members";
$conn = new mysqli($sn, $un, $pd, $db);
if ($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}else{
    echo " Connected successfully";
}