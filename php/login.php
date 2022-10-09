<?php
require_once("config.php");
session_start();

 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 if(!empty($email) && !empty($password)){
    $select  = "select * from user where email = '{$email}' ";
    $result = $conn->query($select);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc() ){
            $pass_decode = md5($password);
            if($row["password"] == $pass_decode ){  
                $status = "Active Now";
                $sqlUpdqate = "update user set status = '{$status}' where unique_id  =  {$row['unique_id']}";
                if($conn->query($sqlUpdqate)){
                   $_SESSION["unique_id"] = $row['unique_id'];
                               
                   // echo $_SESSION["unique_id"];
                   echo "success";
                }else {
                   echo "error in update";
                }
              
            }
        }
    }else{
        echo "email is'nt correct";
    }
 }else{
     echo "All input fields are required!";
 }

?>