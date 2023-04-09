//toggle btn togggling sidebar 
let btn = document.getElementById("btn");
let sidebar = document.getElementById("sidebar");
let set_number = 0;

btn.addEventListener("click", function(){
    if(set_number == 0){
        sidebar.classList.add("side");
       // sidebar.style.margin = "0";
        btn.className = "fas fa-xmark"
        set_number++

    }else{
        sidebar.classList.remove("side");
        btn.className = "fas fa-bars"
        set_number--
    }
})


