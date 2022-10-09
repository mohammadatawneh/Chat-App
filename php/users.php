

<?php


    session_start();
    require_once("config.php");
    $unique_id = $_SESSION['unique_id'] ;

    $sql = "select * from user where not unique_id = $unique_id "  ;

    $result = $conn->query($sql);

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo '
            <a href="chat.php?id='.$row["unique_id"].'">
            <div class="content">
                <img src="images/'.$row["img"].'" alt="">
                <div class="details">
                    <div class="username">'.$row["fname"]." ".$row["lname"].'</div>
                    <div class="message">
                        this is message
                    </div>
                </div>
            </div>
            <div class="status-dot">
                <i class="fas fa-circle"></i>
                <input type="hidden" class="value-s" value="'.$row["status"].'">
            </div>
            
            </a> 
            '
                
            ;
        }
    }else
    {
        echo "nums rows equel zero";
    }


?>

