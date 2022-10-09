<?php 
    require_once("php/config.php");
    require_once("php/header.php");
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    
                    <?php   $select  = "select * from user where unique_id = '{$_SESSION['unique_id']}' ";
                            $result = $conn->query($select);
                            if($result->num_rows>0){
                                while($row = $result->fetch_assoc()){
                                    echo "
                                    <img src='images/".$row['img'] ."' alt=''>
                                    <div class='details'>
                                        <div class='username'> ".$row['fname'] ." ". $row['lname'] . " </div>
                                        <div class='status'> ".$row['status'] ."</div>
                                    </div>
                                    ";
                                }
                            }
                            ?>
                </div>
                <a href="php/logout.php?id=<?php echo $_SESSION['unique_id'] ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <!-- <form action=""></form> -->
                <span class="text">Select an user to start chat</span>
                <input type="text" name="search" id="search" placeholder="Enter the name to search" onkeyup="search(this.value)">
                <button id="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="users-list"></div>
            
        </section>
    </div>
    

    <script src="js/users.js"></script>
</body>
</html>