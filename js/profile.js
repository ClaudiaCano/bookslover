
var fav = document.getElementById("favoritos");
var save = document.getElementById("guardados");

window.onload = perfil();

function perfil() {

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

function compras(){
	$.ajax({
		data: {"id_libro" : id_libro},
		url: "../php/perfil.php",
		method: "post",
		success: function(data) {
			detalles.innerHTML(data);		
		},
		error: function() {
			alert("Error al añadir a favoritos");
		},
	});
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



