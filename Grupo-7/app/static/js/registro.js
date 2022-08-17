function agregarUsuario(){
    var cedula = document.getElementById("cedula").value;
    var nombres = document.getElementById("nombres").value;
    var apellidos = document.getElementById("apellidos").value;
    var sexo = document.querySelector('input[name=sexo]:checked').value;
    var telefono =  document.getElementById("telefono").value;
    var fechaNacimiento = document.querySelector('input[name="fechaNacimiento"]').value;
    var correo = document.getElementById("correo").value;
    var idioma = document.querySelector('input[name="idioma"]:checkbox').value;
    var contrasena = document.getElementById("contrasena").value;

    if(cedula == ""){
        alert("El número de cédula es obligatorio");
        document.getElementById("cedula").focus();
    }
    if(nombres == ""){
        alert("El nombre es obligatorio");
        document.getElementById("nombres").focus();
    }
    if(apellidos == ""){
        alert("El apellido es obligatorio");
        document.getElementById("apellidos").focus();   
    }
    if(sexo == ""){
        document.querySelector('input[name=sexo]').focus();
    }
    if(telefono == ""){
        alert("Ingrese el número obligatorio");
        document.getElementById("telefono").focus();   
    }
    if(fechaNacimiento == ""){
        alert("Ingrese la fecha de nacimiento");
        document.querySelector('input[name="fechaNacimiento"]').focus();   
    }
    if(correo == ""){
        alert("Ingrese un correo electrónico");
        document.getElementById("correo").focus();   
    }
    if(idioma == ""){
        alert("Elija un idioma ");
        document.querySelector('input[name="idioma"]').focus();   
    }
    if(contrasena == ""){
        alert("Ingrese una contraseña");
        document.getElementById("contraseña").focus();   
    }
console.log(cedula + " " + nombres + " " + apellidos + " " + sexo + " " + telefono + " " + fechaNacimiento + " " + contrasena);
}