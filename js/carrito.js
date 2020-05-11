var $num_items = document.getElementById("num-items");
var $items = 0;

window.onload = function(){
    $num_items.innerHTML = $items;
}

function añadir(){
    $items++;

    $num_items.innerHTML = $items;
}