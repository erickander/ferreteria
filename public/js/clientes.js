//arrow funcion
const validar=()=>{
      const cli_nombre=document.querySelector("#cli_nombre");
      if (cli_nombre.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Nombre Obligatorio!',
});              
 return false;

      }
    if (cli_apellido.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Apellido Obligatorio!',
});              
 return false;

      }
      if (cli_email.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Correo Electronico Obligatorio!',
});              
 return false;

      }
      if (cli_cedula.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Cedula Obligatorio!',
});              
 return false;

      }
      if (cli_direccion.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Direccion Obligatorio!',
});              
 return false;

      }
         if (cli_telefono.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Telefono Obligatorio!',
});              
 return false;

      }
         if (password.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Contraseña Obligatorio!',
});              
 return false;

      }
     
     
     
     

}  
