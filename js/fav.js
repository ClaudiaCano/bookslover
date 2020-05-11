
function fav (id) {
    var cor = document.getElementById('cor');
    var img_0 = "../img/cor_0.png";
    var img_1 = "../img/cor_1.png";
    //console.log("function save("+id+")");

    if (cor.getAttribute("src") == img_0) {
        cor.src = img_1;
    } else if (cor.getAttribute("src") == img_1) {
        cor.src = img_0;
    }
}