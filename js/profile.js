window.onload = perfil();

function perfil(){
	$("#detalles").html('<div class="row mb-5"><div class="col-12"><h2>libros favoritos</h2><div id="favoritos" class="mt-3"></div></div></div><div class="row mb-5"><div class="col-12"><h2>libros guardados</h2><div id="guardados" class="mt-3"></div></div></div>');

	$.ajax({
		data: {},
		url: "../php/profileFav.php",
		method: "post",
		dataType: 'JSON',
		success: function(data) {
			favoritos(data.books.fav);
		},
		error: function() {
			alert("Error al cargar el perfil");
		},
	});

	$.ajax({
		data: {},
		url: "../php/profileSave.php",
		method: "post",
		dataType: 'JSON',
		success: function(data) {
			guardados(data.books.save);
		},
		error: function() {
			alert("Error al cargar el perfil");
		},
	});
}

function favoritos(data){
	//var n = data.length;
	$("#favoritos").empty();
	
	for(var i=0; i<6; i++){
				
		$.ajax({
			data: {"id": data[i].id_libro},
			url: "../php/getCovers.php",
			method: "post",
			success: function(response) {
				$("#favoritos").append(response);
			},
			error: function(xhr, status, error) {
				var err = eval("(" + xhr.responseText + ")");
				alert(xhr.responseText.Message);
			  },
		});

	}
}

function guardados(data){
	//var n = data.length;
	$("#guardados").empty();
	
	for(var i=0; i<6; i++){
				
		$.ajax({
			data: {"id": data[i].id_libro},
			url: "../php/getCovers.php",
			method: "post",
			success: function(response) {
				$("#guardados").append(response);
			},
			error: function(xhr, status, error) {
				var err = eval("(" + xhr.responseText + ")");
				alert(xhr.responseText.Message);
			  },
		});

	}
}

function compras(e){
	$("#detalles").empty();
	$("#detalles").html("<h1>mis compras</h1>");

	/*$.ajax({
		data: {"id": data[i].id_libro},
		url: "../php/getCompras.php",
		method: "post",
		success: function(response) {
			$("#guardados").append(response);
		},
		error: function(xhr, status, error) {
			var err = eval("(" + xhr.responseText + ")");
			alert(xhr.responseText.Message);
		  },
	});*/
}

function logOut(){
	$.ajax({
		data: {"id_libro" : id_libro},
		url: "../php/perfil.php",
		method: "post",
		success: function(data) {
			alert(data);
		},
		error: function() {
			alert("Error al añadir a favoritos");
		},
	});
}



