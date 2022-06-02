//arrow funcion
const validar=()=>{
      const usu_name=document.querySelector("#usu_name");
      if (usu_name.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Nombre Obligatorio!',
});              
 return false;

      }
    if (usu_email.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Correo Electronico Obligatorio!',
});              
 return false;

      }
      if (usu_cedula.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Cedula Obligatorio!',
});              
 return false;

      }
      if (usu_ruc.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Ruc Obligatorio!',
});              
 return false;

      }
      if (usu_direccion.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Direccion Obligatorio!',
});              
 return false;

      }
         if (usu_telefono.value.length==0) {
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
