const searchBtn = document.getElementById("btn-search"),
searchInp = document.querySelector(".users .search input[type='text']")
icon = document.querySelector(".users .search button i") ;

searchBtn.addEventListener("click", function(){
    searchInp.classList.toggle("active");
    searchBtn.classList.toggle("active");
    // icon.classList.toggle("active");


});



setInterval(() => {
    myAjax = new XMLHttpRequest();
    myAjax.open("GET","php/users.php");
    myAjax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
                
            if(!document.querySelector(".users-list").classList.contains("active")){
                document.querySelector(".users-list").innerHTML = this.responseText;
                statusDot = document.querySelectorAll("a .status-dot"),
                valueStatus = document.querySelectorAll("a .status-dot .value-s") ;
                for (let i = 0; i < statusDot.length; i++) {
                    if(valueStatus[i].value == "Offline Now"){
                        statusDot[i].classList.add("off-line");         
                    }
                }            
            }
            
          
        }
    };
    myAjax.send();
}, 500);


function search(value){
    
    myAjax = new XMLHttpRequest();
    myAjax.open("GET","php/search.php?value="+value);
    myAjax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(value != ""){
                document.querySelector(".users-list").classList.add("active");
                document.querySelector(".users-list").innerHTML = this.responseText;
                statusDot = document.querySelectorAll("a .status-dot"),
                valueStatus = document.querySelectorAll("a .status-dot .value-s") ;
                for (let i = 0; i < statusDot.length; i++) {
                    if(valueStatus[i].value == "Offline Now"){
                        statusDot[i].classList.add("off-line");         
                    }
                }            
            }else {
                document.querySelector(".users-list").classList.remove("active");

            }
        }
    };
    myAjax.send();
}
