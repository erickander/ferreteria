//arrow funcion
const validar=()=>{
      const cli_nombre=document.querySelector("#cli_nombre");
      if (cli_nombre.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
    if (cli_apellido.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
      if (cli_email.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
      if (cli_cedula.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
      if (cli_direccion.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
         if (cli_telefono.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
         if (password.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
     
     
     
     

}  
