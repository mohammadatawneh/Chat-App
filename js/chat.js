const form = document.querySelector(".chat-area .typing-area");


form.addEventListener("submit", (event)=>{
    myAjax = new XMLHttpRequest();
    myAjax.open("POST","php/chat.php");
    myAjax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
            form.reset();
        }
    };
    let formData = new FormData(form);
    myAjax.send(formData);
    event.preventDefault();
    
});
setInterval(() => {
    
    const sender = document.getElementById("sender_id").value,
    receiver = document.getElementById("receiver_id").value,
    chatBox = document.querySelector(".chat-box")
    
    ;
    
    // console.log(sender + "  " +receiver);
    myObj = {sender: sender, receiver: receiver };
    myJson =JSON.stringify(myObj);
    myAjax = new XMLHttpRequest();
    myAjax.open("POST","php/messages.php");
    myAjax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
            chatBox.innerHTML = this.responseText;
        }
    };
    myAjax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    myAjax.send("data="+myJson);

}, 500);


// if( this.responseText == "success"){
//     // alert(this.responseText);
//     location.href = "users.php";
// }else {
//     $error.style.display = "block";
//     $error.innerHTML = this.responseText;

// }
// // form.reset();