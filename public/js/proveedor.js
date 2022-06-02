//arrow funcion
const validar=()=>{
      const dor_nombre=document.querySelector("#dor_nombre");
      if (dor_nombre.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Nombre Obligatorio!',
});              
 return false;

      }
    if (dor_apellido.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Apellido Obligatorio!',
});              
 return false;

      }
      if (dor_ruc.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Ruc Obligatorio!',
});              
 return false;

      }
      if (dor_cedula.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Cedula Obligatorio!',
});              
 return false;

      }
      if (dor_direccion.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Direccion Obligatorio!',
});              
 return false;

      }
         if (dor_telefono.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Telefono Obligatorio!',
});              
 return false;

        }
         if (dor_fecha.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Fecha Obligatorio!',
});              
 return false;

      }
}  