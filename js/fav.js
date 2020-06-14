
function fav (id_libro) {
    var cor = document.getElementById('cor');
    var img_F0 = "../img/cor_0.png";
    var img_F1 = "../img/cor_1.png";

    if (cor.getAttribute("src") == img_F0) { //guardar
		//alert(id_libro);
		
		$.ajax({
			data: {"id_libro" : id_libro},
			url: "../php/fav.php",
			method: "post",
			success: function(data) {
				//alert(data);
				cor.src = img_F1;
			},
			error: function() {
				alert("Error al añadir a favoritos");
			},
		});
		
    } else if (cor.getAttribute("src") == img_F1) { //borrar
       
		$.ajax({
			data: {"id_libro" : id_libro},
			url: "../php/unfav.php",
			method: "post",
			success: function(data) {
				//alert(data);
				cor.src = img_F0;
			},
			error: function() {
				alert("Error al borrar de favoritos");
			},
		});
    }
}



