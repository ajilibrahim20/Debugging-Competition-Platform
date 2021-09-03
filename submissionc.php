<?php
    session_start();
    if(!(isset($_POST["name"])&&isset($_POST["phone"])&&isset($_POST["semester"])&&isset($_POST["branch"])&&isset($_POST["program1"])&&isset($_POST["program2"])&&isset($_POST["program3"]))){
        echo "error";
    }
    else{
        try{

            require 'connect.php';

            date_default_timezone_set('Asia/Kolkata');
            mkdir("submissions/".$_POST["name"]."_".$_POST["phone"]."_".$_POST["semester"]."_".$_POST["branch"]."_".date("h:i:sa"));
            $file = fopen("submissions/".$_POST["name"]."_".$_POST["phone"]."_".$_POST["semester"]."_".$_POST["branch"]."_".date("h:i:sa")."/program1.c","w");
            fwrite($file,$_POST["program1"]);
            fclose($file);

            $file = fopen("submissions/".$_POST["name"]."_".$_POST["phone"]."_".$_POST["semester"]."_".$_POST["branch"]."_".date("h:i:sa")."/program2.c","w");
            fwrite($file,$_POST["program2"]);
            fclose($file);

            $file = fopen("submissions/".$_POST["name"]."_".$_POST["phone"]."_".$_POST["semester"]."_".$_POST["branch"]."_".date("h:i:sa")."/program3.c","w");
            fwrite($file,$_POST["program3"]);
            fclose($file);

            $file = fopen("submissions/".$_POST["name"]."_".$_POST["phone"]."_".$_POST["semester"]."_".$_POST["branch"]."_".date("h:i:sa")."/program4.c","w");
            fwrite($file,$_POST["program4"]);
            fclose($file);
            
            $sql="Update debugging set endTime=convert_tz(now(),'+00:00','+05:30'), status='submitted', dev='".$_POST["contestantId"]."' where phone='".$_POST["phone"]."'";
            if($conn->query($sql)===TRUE){
                setcookie("finishStatus","done",time() + 86400* 1000,"/");
                echo "done";
            }
            else{
                echo "error";
            }
        }
        catch(Exception $e){
            echo "error";
        }
    }


?>