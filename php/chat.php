<?php
    if(!$_POST['message'] == ""){

        session_start();
        require_once("config.php");
        $sender = $conn -> real_escape_string($_POST["sender"]);
        $receiver = $conn -> real_escape_string($_POST["receiver"]);
        $message = $conn -> real_escape_string($_POST["message"]);
        // echo $sender ."\t ". $receiver ."\t". $message 
    
        $sql = $conn->prepare("INSERT INTO MESSAGES(SENDER_ID, RECEIVER_ID, MESSAGE)
        VALUES(?,?,?)
        ");
        $sql->bind_param("iis",$receiver,$sender, $message);
    
        if($sql->execute())
        {
        echo "success";
        }else {
        echo "Something went wrong. Please try again!";
        } 
    }
?>