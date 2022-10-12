<?php
include("connect.php");

if(isset($_GET["id"])){
    $id= $_GET["id"];
        $sql = "DELETE FROM `crud_tb` WHERE id = $id";
        $result = $conn->query($sql);
        if($result){
            header("Location: display.php");
        }
}
?>