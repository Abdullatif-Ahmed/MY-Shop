var mixer = mixitup('.products-content');


let button_up = document.querySelector(".up");
let fixed = document.querySelector(".bottom-header");





window.onscroll = function(){
    
       if(this.scrollY>=333.3333435058594){
        fixed.classList.add("header-fixed");
        }
        else{
        fixed.classList.remove("header-fixed");
        }
    
    
        if(this.scrollY>=1000){
            button_up.classList.add("show");
        }
        else{
           button_up.classList.remove("show");
        }
    
}


button_up.onclick= function(){
    window.scrollTo({
        top:0,
        behavior:"smooth"
    })
};
