const form =document.querySelector(".login form "),
$error =document.querySelector(".login form .error-text ");

form.addEventListener("submit",function(event){
    myAjax = new XMLHttpRequest();
    myAjax.open("POST","php/login.php");
    myAjax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if( this.responseText == "success"){
                // alert(this.responseText);
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