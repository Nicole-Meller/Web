 function validarDatos() {
 	var variable = true;

 		if(!document.form.nombre.value){
 			alert("Se Necesita un Nombre...!");
 			document.form.nombre.value.focus;
 			variable="false";
		}

		else if(!document.form.apellidop.value){
 			alert("Se Necesita un Apellido Paterno...!");
 			document.form.apellidop.value.focus;
 			variable="false";
		}

		else if(!document.form.apellidom.value){
 			alert("Se Necesita un Apellido Materno...!");
 			document.form.apellidom.value.focus;
 			variable="false";
		}



 		if (variable) {
 			document.form.submit();
 		}
 	}

 	window.onload=function(){
 		document.getElementById('boton').onclick=validarDatos;
 	}