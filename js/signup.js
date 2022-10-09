const form =document.querySelector(".signup form "),
$error =document.querySelector(".signup form .error-text ");

form.addEventListener("submit",function(event){
    myAjax = new XMLHttpRequest();
    myAjax.open("POST","php/signup.php");
    myAjax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if( this.responseText == "success"){
                alert(this.responseText);
                location.href = "users.php";
            }else {
                $error.style.display = "block";
                $error.innerHTML = this.responseText;

            }
            // form.reset();
        }
    };
    let formData = new FormData(form);
    myAjax.send(formData);
    event.preventDefault();
    
})
    // const fname = document.getElementById("fname").value;
    // const lname = document.getElementById("lname").value;
    // const email = document.getElementById("email").value;
    // const password = document.getElementById("password").value;
    // const img = document.getElementById("img").value;
    // const myObj = {fname:fname, lname:lname, email:email, password:password, img:img,} ;
    // alert(fname);
    // const $myJson = JSON.stringify(myObj);
    // myAjax.send("myJson="+ $myJson );
    // myAjax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");