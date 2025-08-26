<?php
if(isset($_POST['submit'])){
    include "dbconnect.php";
    echo "connected";
    $uname = $conn->real_escape_string($_POST['uname']);
    $pass1 = $conn->real_escape_string($_POST['pass1']);
}
$sql = "SELECT * FROM memberstbl WHERE uname = ?; ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $uname);
$stmt->execute();
$result = $stmt->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);
print_r($rows);
echo "password:";
print_r($pass1);
if ($rows){
    foreach ($rows as $row) {
        print_r($row);
        if (password_verify($pass1, $row['pass1'])){
            echo "login success";
            
            header("location: ../signedup.php?login=success");
        }else{
            echo "login fail";
        }
    }
}else{
    echo "Invalid user";
}
