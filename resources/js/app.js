require('./bootstrap');

//Função Menu Lateral
function menuLat(id) {
    var elem = document.getElementById(id);
    var elem2 = document.getElementById("main");
    var prop = getComputedStyle(elem).getPropertyValue("width");
    if (prop === "210px") {
        elem.style.width = "60px";
        elem2.style.marginLeft = "70px"
    } else {
        elem.style.width = "210px";
        elem2.style.marginLeft = "220px"
    }
}

function dica(id) {
    var elem = document.getElementById(id);
    var prop = getComputedStyle(elem).getPropertyValue("display");
    if(prop == "inline"){
        elem.style.display = "none";
    }else{
        elem.style.display = "inline";
    }
}
