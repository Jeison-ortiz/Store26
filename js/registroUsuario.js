var indice = 0;

window.onload = function() {
    
    var form = document.registro_user;
    var formSesion = document.iniciarSesion;
    //console.log(form);

  
    var elementos = form.elements;
	for (var i in elementos){
		//var elem = elementos[i];
		//console.log(elem);	
		if(elementos[i].name == "nombre" || elementos[i].name == "telefono" || elementos[i].name == "email" || elementos[i].name == "password1" || elementos[i].name == "password2"){
				//elementos[i].onblur = validar;
				elementos[i].onkeypress = permitir;
				if(elementos[i].onkeypress == -1){
					alert("caracter no permitido");
				}
				//console.log(elementos[i]);
		}			
    }
    
    var elementosSesion = formSesion.elements;
    for (var i in elementosSesion){
        //var elem = elementos[i];
        //console.log(elem);	
        if(elementosSesion[i].name == "email" || elementosSesion[i].name == "password"){
            //elementos[i].onblur = validar;
            elementosSesion[i].onkeypress = permitirSesion;
            if(elementosSesion[i].onkeypress == -1){
              alert("caracter no permitido");
            }
            //console.log(elementos[i]);
        }			
      }
    document.getElementById("nombre_user").onkeyup = habilitarBoton;
    document.getElementById("telefono_user").onkeyup = habilitarBoton;
    document.getElementById("correo_user").onkeyup = habilitarBoton;
    document.getElementById("pass1_user").onkeyup = habilitarBoton;
    document.getElementById("pass2_user").onkeyup = habilitarBoton;
  
    document.getElementById("correo").onkeyup = habilitarBotonSesion;
    document.getElementById("pass").onkeyup = habilitarBotonSesion;



    var formAdmin = document.formLoadArticule;
    console.log(formAdmin);
    
  
    var elementosAdmi = formAdmin.elements;
	for (var i in elementosAdmi){
		var elem = elementosAdmi[i];	
		if(elementosAdmi[i].name == "marca" || elementosAdmi[i].name == "precio" || elementosAdmi[i].name == "cantidad" || elementosAdmi[i].name == "descripcion" ){
				
            elementosAdmi[i].onkeypress = permitirAdmin;
				if(elementosAdmi[i].onkeypress == -1){
					alert("caracter no permitido");
				}	
		}			
    }


    document.getElementById("selectArticulos").onclick = habilitarBotonAdmin;
    document.getElementById("imagen").onchange = habilitarBotonAdmin;
    document.getElementById("marca").onkeyup = habilitarBotonAdmin;
    document.getElementById("precio").onkeyup = habilitarBotonAdmin;
    document.getElementById("cantidad").onkeyup = habilitarBotonAdmin;
    document.getElementById("descripcion").onkeyup = habilitarBotonAdmin;
    document.getElementById("talla").onkeyup = habilitarBotonAdmin;
}


function habilitarBoton(){
    
    console.log("efectivamente");
    var nombre = document.getElementById("nombre_user").value;
    var telefono = document.getElementById("telefono_user").value;
    var correo = document.getElementById("correo_user").value;
    var pass1 = document.getElementById("pass1_user").value;
    var pass2 = document.getElementById("pass2_user").value;
 
    if(nombre ==='' || telefono === '' || correo === ''|| pass1 === ''|| pass2 === ''){
        
        console.log("entre ome!"); 
        document.getElementById("btn_registrar").disabled = true;
    }else{
        
        document.getElementById("btn_registrar").disabled = false;
    }
}

function habilitarBotonSesion(){
    
    console.log("efectivamente");
    var correo = document.getElementById("correo").value;
    var contrasena = document.getElementById("pass").value;
   
  
    if(correo ==='' || contrasena === '' ){
        
        console.log("entre ome!"); 
        document.getElementById("iniciarSesion").disabled = true;
    }else{
        
        document.getElementById("iniciarSesion").disabled = false;
    }
  }

function validar(){
	//console.log(this.value);
	if(this.value == ""){
		this.focus();
	}
}

function permitir(event){
	switch(this.name){
		case "nombre":
			p = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
			break;
		case "telefono":
			p = "1234567890";
            break;
        case "email":
            p = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.@1234567890";
            break;
        case "password1":
            p = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890 ";
            break;
        case "password2":
            p = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890 ";
            break;
	}

	var cod = event.charCode;
	var letra = String.fromCharCode(cod);
	//console.log(letra);
	if(p.indexOf(letra) == -1){
		alert("caracter no permitido");
	}
	return p.indexOf(letra) != -1;
}

function permitirSesion(event){
    switch(this.name){
      case "email":
              p = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.@1234567890";
              break;
          case "password":
              p = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890 ";
              break;
    }
  
    var cod = event.charCode;
    var letra = String.fromCharCode(cod);
    //console.log(letra);
    if(p.indexOf(letra) == -1){
      alert("caracter no permitido");
    }
    return p.indexOf(letra) != -1;
  }





// validaciones subir articulos admin





function habilitarBotonAdmin(){
    indice = document.getElementById("selectArticulos").selectedIndex;
    console.log(indice);
   

    console.log("efectivamente");
    var img = document.getElementById("imagen").value;
    var marca = document.getElementById("marca").value;
    var precio = document.getElementById("precio").value;
    var cantidad = document.getElementById("cantidad").value;
    var descripcion = document.getElementById("descripcion").value;
    var talla = document.getElementById("talla").value;
    

    if(indice === 0 || img === '' || marca === '' || precio ==='' || cantidad === '' || descripcion === '' || talla === ''){
        
        console.log("entre ome!");
           
        document.getElementById("subir").disabled = true;
    }else{
        
        document.getElementById("subir").disabled = false;
    }

}

function permitirAdmin(event){
	switch(this.name){
		case "marca":
			p = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.@1234567890 ";
			break;
		case "precio":
			p = "1234567890.";
            break;
        case "cantidad":
            p = "1234567890";
            break;
        case "descripcion":
            p = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.1234567890áéíóú´ ";
            break; 
        case "talla":
            p = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.1234567890 ";
            break;
	}

	var cod = event.charCode;
	var letra = String.fromCharCode(cod);
	//console.log(letra);
	if(p.indexOf(letra) == -1){
		alert("caracter no permitido");
	}
	return p.indexOf(letra) != -1;
}
