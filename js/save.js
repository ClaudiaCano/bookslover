
function save (id) {
    var guardar = document.getElementById('guardar');
    var img_0 = "../img/guardar_0.png";
    var img_1 = "../img/guardar_1.png";
    //console.log("function save("+id+")");

    if (guardar.getAttribute("src") == img_0) {
        guardar.src = img_1;
    } else if (guardar.getAttribute("src") == img_1) {
        guardar.src = img_0;
    }
}