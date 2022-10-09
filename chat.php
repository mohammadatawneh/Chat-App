<?php
 require_once("php/header.php") ;
 require_once("php/config.php");;
 session_start();
 $sender =  $_GET['id'];  
 $receiver =  $_SESSION['unique_id'];  
?> 
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="users.php" class="back"><i class="fa-solid fa-arrow-left-long"></i></a>
                <?php
                    $sql = "select * from user where unique_id = $sender";
                    $result =$conn->query($sql);
                    if($result->num_rows > 0){
                        if($row = $result->fetch_assoc()){
                            echo '
                            <div class="content">
                                <img src="images/'.$row['img'].'" alt="">
                                <div class="details">
                                    <div class="username">'.$row['fname']." ".$row['lname'].'</div>
                                    <div class="status">'.$row['status'].'</div>
                                </div>
                            </div>
                            ';
                        }else
                        {
                            "error in fetch data";
                        }
                    }
                ?>
                
            </header>
            <div class="chat-box">
              
            </div>
            <input type="hidden" id="sender_id" value="<?php echo $sender?>" >
            <input type="hidden" id="receiver_id" value="<?php echo $receiver?>" >

            <form action="" class="typing-area" method="post">
                <input type="text" name="message" id="message" placeholder="Type an message here">
                <input type="hidden" name="sender" value="<?php echo $sender?>" >
                <input type="hidden" name="receiver" value="<?php echo $receiver?>" >
                <button name="send"><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>  
    <script src="js/chat.js"></script>
</body>
</html>