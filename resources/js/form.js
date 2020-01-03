function validar(){
  var nombre, apellido, edad, email, contraseña1, contraseña2;

  nombre = document.getElementById('nombre').value;
  apellido = document.getElementById('apellido').value;
  edad = document.getElementById('edad').value;
  email = document.getElementById('email').value;
  contraseña1 = document.getElementById('contraseña1').value;
  contraseña2 = document.getElementById('contraseña2').value;

  if(contraseña1 != contraseña2){
    alert("Las contraseñas no coinciden");
    return false;
  }
  else if (contraseña1 < 8) {
    alert("La clave debe contener al menos 8 caracteres");
    return false;
  }
  else {
    return true;
  }
}
