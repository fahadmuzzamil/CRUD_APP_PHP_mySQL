<?php
include "connect.php";
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    
    $sql = "INSERT INTO `crud_tb` (name,email,mobile,password)
            VALUES('$name','$email','$mobile','$password')";
    $result = $conn->query($sql);
    if($result){
        header("Location: display.php");
    }
}
?>