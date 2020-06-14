
function save (id_libro) {
    var guardar = document.getElementById('guardar');
    var img_S0 = "../img/guardar_0.png";
    var img_S1 = "../img/guardar_1.png";
    //console.log("function save("+id+")");

    if (guardar.getAttribute("src") == img_S0) {
		//alert("save.php");
        $.ajax({
			data: {"id_libro" : id_libro},
			url: "../php/save.php",
			method: "post",
			success: function(data) {
				//alert(data);
				guardar.src = img_S1;
			},
			error: function() {
				alert("Error al añadir a gurdados");
			},
		});
		
    } else if (guardar.getAttribute("src") == img_S1) {
		//alert("unsave.php");
        $.ajax({
			data: {"id_libro" : id_libro},
			url: "../php/unsave.php",
			method: "post",
			success: function(data) {
				//alert(data);
				guardar.src = img_S0;
			},
			error: function() {
				alert("Error al borrar en guardados");
			},
		});
		
    }
}