
const goTop = document.getElementById("go-top");
window.onscroll = function(){
    if(document.documentElement.scrollTop > 900){
        goTop.style.visibility = "visible";
    }else {
        goTop.style.visibility = "hidden";
    }
}

goTop.onclick = function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

document.querySelectorAll('.link-section').forEach(function(element){
    element.onclick = function(e){
        e.preventDefault();
        topSection = document.querySelector(element.getAttribute('href')).offsetTop;
        window.scrollTo({ 
            top: topSection - 100,
            behavior: 'smooth' 
        });
    };
});