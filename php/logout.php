<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        require_once("config.php");
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        $status = "Offline Now";
      /*   if(isset($logout_id)){ */
            $sql ="update user set status='{$status}' where unique_id= {$_SESSION['unique_id']}";
            if($conn->query($sql)){
                session_unset();
                session_destroy();
                header("location: ../login.php") ;
            }
        /* }
        else{ header("location: ../users.php"); } */
    }else { header("location: ../login.php") ; }
?>