<?php
    header("Content-Type: application/json; charset=UTF-8");
    require_once("config.php");;

    $data = json_decode($_POST['data']);
    $sender =  $data->sender;
    $receiver =  $data->receiver;
    $select  = "select sender_id ,receiver_id, message from messages   where 
    sender_id = $sender && receiver_id = $receiver || sender_id = $receiver && receiver_id = $sender";
    $result= $conn->query($select);
    if($result->num_rows>0){
        
        while($row = $result->fetch_assoc()){
            
            if($sender  == $row['sender_id']){
                $select_2 = "select img from user where unique_id = {$sender} ";
                $result_2 = $conn->query($select_2);            
                if($result_2->num_rows>0){
                    if($row_2 = $result_2->fetch_assoc()){
                        echo'
                        <div class="chat sender">
                        <img src="images/'.$row_2['img'].'" alt="">
                        <p>'.$row['message'].'</p>
                        </div>';
                    }
                }
            }else {
                echo '
                <div class="chat receiver">
                    <p>'.$row['message'].'</p>
                </div>         
                ';
            }

        }
    }

?>