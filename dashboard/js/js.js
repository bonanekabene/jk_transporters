//notification section 
let notification = document.getElementById("notification");
let notifi_menu = document.getElementById("notifi_menu");
let number = 0;

notification.addEventListener("click", function(){
    //display notification if btn clicked
    if(number == 0){
        notifi_menu.style.display = "block";
        number++

    }else{
        notifi_menu.style.display = "none";
        number--
    }
})

