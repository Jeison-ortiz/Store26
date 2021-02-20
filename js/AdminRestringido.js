var indice = 0;

window.onload = function() {
    
    var formAdmin = document.formLoadArticule;
    console.log(formAdmin);
    console.log(document.getElementById("selectArticulos").selectedIndex);
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


function habilitarBotonAdmin(){
    indice = document.getElementById("selectArticulos").selectedIndex;
    console.log(indice);
    alert("for fin")

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