//typer scripts function 
$('#typing').typer({
    strings:[
        'Welcome To JK Transporters',
        'Transporters Over Country',
        'With Great Deals',
        // 'rosette',
    ]
});


//togggle btn
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
});


//toggling class for the navbar from active to none active
let home = document.querySelector(".home");
let service = document.querySelector(".serv");
let benefit = document.querySelector(".benefit");
let branch = document.querySelector(".bran");

benefit.addEventListener("click", function() {
    benefit.classList.toggle("active");
    home.classList.remove("active");
    branch.classList.remove("active");
    service.classList.remove("active");
});

home.addEventListener("click", function() {
    home.classList.toggle("active");
    benefit.classList.remove("active");
    branch.classList.remove("active");
    service.classList.remove("active");
});

service.addEventListener("click", function() {
    service.classList.toggle("active");
    benefit.classList.remove("active");
    home.classList.remove("active");
    branch.classList.remove("active");
});

branch.addEventListener("click", function() {
    branch.classList.toggle("active");
    benefit.classList.remove("active");
    home.classList.remove("active");
    service.classList.remove("active");
});


