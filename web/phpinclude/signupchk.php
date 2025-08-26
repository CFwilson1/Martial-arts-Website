<?php

if(isset($_POST['submit'])){
    include "dbconnect.php";
    $fname = $conn->real_escape_string($_POST['fname']);
    $lname = $conn->real_escape_string($_POST['lname']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $uname = $conn->real_escape_string($_POST['uname']);
    $pass1 = $conn->real_escape_string($_POST['pass1']);
    $pass2 = $conn->real_escape_string($_POST['pass2']);
}
$sql = "SELECT * FROM memberstbl WHERE email = ? OR uname = ?; ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $uname);
$stmt->execute();
$result = $stmt->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);
if($rows){
    echo "username or email already exists";
    $stmt->close(); 
    $conn->close();
}else{
    $hashPassword = password_hash($pass1, PASSWORD_DEFAULT);
    $sql = "INSERT INTO memberstbl (fname, lname, email, phone, uname, pass1) VALUES (?,?,?,?,?,?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $fname, $lname, $email, $phone, $uname,$hashPassword);
    $stmt->execute(); 
    $stmt->close(); 
    $conn->close();
    header("location: ..\login.html"); 
    
}