let  eye = document.getElementById("eye");
        let pass= document.getElementById("password");
        eye.addEventListener("click", function (){
            // eye.classList.remove("fa-eye");
            if(eye.className == "fa-sharp fa-solid fa-eye"){
                eye.className ="fa-solid fa-eye-slash";
                pass.setAttribute("type", "text");
            }
            else {
                eye.className ="fa-sharp fa-solid fa-eye";
                pass.setAttribute("type", "password");
            }

        })