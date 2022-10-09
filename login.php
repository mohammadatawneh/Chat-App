
<?php require_once("php/header.php") ;
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?> 

<body>
    <div class="wrapper">
        <section class="form login">
            <header>
                Chat App 
            </header>
            <form action="" method="post">
                <div class="error-text">This is an error message</div>
                
                <div class="field">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter Your email">
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <i id="eye" class="fa-sharp fa-solid fa-eye"></i>
                    <input type="password" name="password" id="password" placeholder="Enter your Password">
                </div>
                
                <div class="field">
                    <label for=""></label>
                    <input class="btn" type="submit" name="send" id="send" placeholder="" value="Continue To Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a> </div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
    
    <script>
        
    </script>
</body>
</html>