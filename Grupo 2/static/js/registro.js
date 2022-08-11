function agregarUsuario(){
    var Cedula = document.getElementByIdc("cedula").value;
    var Nombre = document.getElementById("nombre").value;
    var Apellido = document.getElementById("apellido").value;
    var Telefono = document.getElementById("telefono").value;
    var Sexo = document.querySelector('input[name = sexo]:checked').value
    var Fechadenacimiento  = document.querySelector('input[name = date]:checked').value
    var Correoelectronico = document.getElementById("correoelectronico").value
    var Idioma = document.querySelector("input[name = Idioma]:checked").value
    var Password = document.getElementById(Password).value
    

    if(Cedula == ""){
        alert("el numero de cedula es obligatorio");
        document.getElementById("cedula").focus();
    }
    if(Nombre == ""){
        alert("el nombre es obligatorio");
        document.getElementById("nombre").focus();
    }
    if(Apellido == ""){
        alert("el apellido es obligatorio");
        document.getElementById("apellido").focus();
    }
    if(Telefono == ""){
        alert("el telefono es obligatorio");
        document.getElementById("Telefono").focus();
    }
    if(Sexo == ""){
        alert("el sexo es obligatorio");
        document.getElementById("Sexo").focus();
    }
    if(Fechadenacimiento == ""){
        alert("la fecha de nacimieto es obligatorio");
        document.getElementById("fecha de nacimiento").focus();
    }
    if(Correoelectronico == ""){
        alert("el correo electronico es obligatorio");
        document.getElementById("Correo electronico").focus();
    }
    if(Idioma == ""){
        alert("el Idioma es obligatorio");
        document.getElementById("Idioma").focus();
    }
    if(Password == ""){
        alert("Password es obligatorio");
        document.getElementById("Password").focus();
    }
    
    console.log(Cedula +"" + Nombre + "" + Apellido + "" + Telefon + "" + Sexo + "" + Fechadenacimiento+ ""+ Correoelectronico+ ""+ Idioma + "" + Password )
}
