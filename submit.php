<?php
    if(!(isset($_POST["name"])&&isset($_POST["phone"])&&isset($_POST["semester"])&&isset($_POST["branch"]))){
        echo "error";
    }
    else{
        session_start();
        $_SESSION["name"]=$_POST["name"];
        $_SESSION["phone"]=$_POST["phone"];
        $_SESSION["semester"]=$_POST["semester"];
        $_SESSION["branch"]=$_POST["branch"];
        $_SESSION["lang"]=$_POST["lang"];
        $_SESSION["mail"]=$_POST["mail"];
        require 'connect.php';
        $sql="Insert into debugging Values(NULL,'".$_POST["name"]."','".$_POST["phone"]."','".$_POST["mail"]."','".$_POST["semester"]."','".$_POST["branch"]."','".$_POST["lang"]."','begin',convert_tz(now(),'+00:00','+05:30'),NULL,NULL)";
        if($conn->query($sql)===TRUE){
            echo "done";
        }
        else{
            echo "error";
        }
        $conn->close();
    }
?>