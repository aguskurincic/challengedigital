// function onSubmit() {
//
// var campoNombre = document.querySelector('input[name=name]');
// var campoApellido = document.querySelector('input[name=surname]');
// var campoEdad = document.querySelector('input[name=edad]');
// var campoEmail = document.querySelector('input[name=email]');
// var campoContraseña = document.querySelector('input[name=password]');
// var campoConfirmarContraseña = document.querySelector('input[name=password2]');
// var elFormulario = document.querySelector('.theForm');
// theForm.onsubmit = function(event) {
//

// var elementosDelFormulario = elFormulario.elements;

// var valorCampoNombre = elementosDelFormulario[0].value;

// campoNombre.onchange = function(){
//   console.log(this.value);
// }
// campoApellido.onchange = function(){
//   console.log(this.value);
// }
// campoEdad.onchange = function(){
//   console.log(this.value);
// }
// campoEmail.onchange = function(){
//   console.log(this.value);
// }
// campoContraseña.onchange = function(){
//   console.log(this.value);
// }


//   if (name.value == "")
//     {
//         window.alert("Escribe tu nombre");
//         name.focus();
//         return false;
//     }
//
//   if (surname.value == "")
//     {
//         window.alert("Escribe tu apellido");
//         name.focus();
//         return false;
//     }
//
//     if (edad.value == "")
//       {
//           window.alert("Escribe tu edad");
//           name.focus();
//           return false;
//       }
//
//     if (email.value == "")
//       {
//           window.alert("Escribe tu Email");
//           name.focus();
//           return false;
//       }
//
//     if (password.value == "")
//       {
//           window.alert("Escribe tu contraseña");
//           name.focus();
//           return false;
//       }
//
//     if (password2.value == "password")
//       {
//           window.alert("Repite tu contraseña");
//           name.focus();
//           return false;
//       }
// }

function myFunction() {
  var name = document.form.name.value;
  var surname = document.form.surname.value;
  var edad = document.form.edad.value;
  var email = document.form.email.value;
  var password = document.form.password.value;
  var password2 = document.form.password2.value;

  if (name.length < 3) {
    alert("El nombre debe contar con al menos 3 caracteres");
    return false;
  }

  if (surname.length < 3) {
    alert("El apellido debe contar con al menos 3 caracteres");
    return false;
  }

  if (edad > 150) {
    alert("La edad debe ser menor a 150 años");
    return false;
  }

  if (password < 8) {
    alert("La contraseña debe tener al menos 8 caracteres");
    return false;
  }

  if (password2 != password) {
    alert("Las contraseñas no coinciden");
    return false;
  }

  return alert("Regitro exitoso!");

}
