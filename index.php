<?php require_once("php/header.php") ?> 

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>
                Chat App 
            </header>
            <form action="" method="post">
                <div class="error-text">This is an error message</div>
                <div class="name-details">
                    <div class="field">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="First Name" >
                    </div>
                    <div class="field">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="Last Name" >
                    </div>
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter Your email" >
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <i id="eye" class="fa-sharp fa-solid fa-eye"></i>
                    <input type="password" name="password" id="password" placeholder="Enter your Password" >

                </div>
                <div class="field">
                    <label for="img">Select image</label>
                    <input type="file" name="img" id="img"  accept="image/x-png,image/gif,image/jpeg,image/jpg" >
                </div>
                <div class="field">
                    <label for=""></label>
                    <input class="btn" type="submit" name="send" id="send" placeholder="" value="Continue To Chat">
                </div>
            </form>
            <div class="link">Already singed up ? <a href="login.php">Login now</a> </div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>