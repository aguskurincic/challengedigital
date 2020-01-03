function Ingresar() {
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var edad = document.getElementById('edad').value;
    var email = document.getElementById('email').value;
    var contraseña1 = document.getElementById('contraseña1').value;
    var contraseña2 = document.getElementById('contraseña2').value;


    if (contraseña1 != contraseña2) {
        alert("Las contraseñas no coinciden ")
    }else  if(contraseña1.length <8 && contraseña2.length <8){
        alert("Las contraseñas deben tener mas de 8 caracteres");
    } else{

        alert("Registro exitoso")
        console.log(nombre);
        console.log(apellido);
        console.log(edad);
        console.log(email);
        console.log(contraseña1);
    }


}
