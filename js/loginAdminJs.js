window.onload = function() {
    
    var form = document.login;
    console.log(form);


    var elementos = form.elements;
	for (var i in elementos){
		var elem = elementos[i];
		//console.log(elem);	
		if(elementos[i].name == "correo" || elementos[i].name == "contrasena"){
				//elementos[i].onblur = validar;
				elementos[i].onkeypress = permitir;
				if(elementos[i].onkeypress == -1){
					alert("caracter no permitido");
				}
				//console.log(elementos[i]);
		}			
    }
    console.log(document.getElementById("correo").value);

    if ((document.getElementById("correo").value) ==='') {
        
    }
    document.getElementById("correo").onkeyup = habilitarBoton;
    document.getElementById("password").onkeyup = habilitarBoton;

    console.log(document.getElementById("password").value);
  
}


function habilitarBoton(){
    
    console.log("efectivamente");
    var email = document.getElementById("correo").value;
    var pass = document.getElementById("password").value;
 
    if(email ==='' || pass === ''){
        
        console.log("entre ome!");
           
        document.getElementById("iniciar").disabled = true;
    }else{
        
        document.getElementById("iniciar").disabled = false;
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
		case "correo":
			p = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.@1234567890";
			break;
		case "contrasena":
			p = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
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



