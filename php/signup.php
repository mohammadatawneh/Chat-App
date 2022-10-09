<?php
    session_start();
    // $_SESSION[""]
    require_once("config.php");
    $fname = $conn -> real_escape_string($_POST["fname"]);
    $lname = $conn -> real_escape_string($_POST["lname"]);
    $email = $conn -> real_escape_string($_POST["email"]);
    $password = $conn -> real_escape_string($_POST["password"]);
    // print_r($_FILES);
   
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) ){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            if(isset($_FILES['img']) == true){
                
                $img_name = $_FILES["img"]["name"];
                $img_type = $_FILES["img"]["type"];
                $img_tmp = $_FILES["img"]["tmp_name"];
                // echo $img_name."\t".$img_type."\t".$img_tmp;
        
                $img_explode = explode(".",$img_name);
                $img_ext = end($img_explode);
                // print($img_ext );
                
                $extensions = ["jpeg", "png", "jpg", "JPEG", 'PNG', "JPG"];
                if(in_array($img_ext, $extensions)){
                    $types = ["image/jpeg", "image/jpg", "image/png"];
                    if(in_array($img_type, $types)){
                        $time = time();
                        $newNameImg = $time . $img_name;
                        if(move_uploaded_file($img_tmp, "../images/".$newNameImg )){
                            // echo "done \t".$newNameImg;
                            $unique_id = rand($time, 100000000);
                            $status = "Active Now";
                            $encode_password = md5($password);
                            $select  = "select * from user where email = '{$email}' ";
                            $result = $conn->query($select);
                            if($result->num_rows>0){
                                while($row = $result->fetch_assoc() ){
                                    echo  "This Email already exsits ";
                                }
                            }else{
                                $sql = $conn->prepare("INSERT INTO USER(UNIQUE_ID, FNAME, LNAME, EMAIL, PASSWORD, IMG, STATUS)
                                                        VALUES(?,?,?,?,?,?,?)
                                ");
                                $sql->bind_param("issssss", $unique_id, $fname,$lname, $email, $encode_password, $newNameImg, $status);
                                // $_SESSION["fullname"] = $fname ." " . $lname;
                                $_SESSION["unique_id"] = $unique_id;
                                
                                if($sql->execute())
                                {
                                    echo "success";
                                }else {
                                    echo "Something went wrong. Please try again!";
                                } }
                            
                        } else { echo "occer error in transform file"; }
        
                    }
                }else{echo "This File Is'nt Image";}
            }else {echo "The File hasn't been uploading ";}
        }else{echo "you have to enter your email correctly";}
        
    }
    else {echo "you have to fill out all failds";}

    // $img = $conn -> real_escape_string($_POST["img"]);
    // echo $fname ."\t" . $lname ."\t" . $email ."\t" . $password ."\t" ;



?>