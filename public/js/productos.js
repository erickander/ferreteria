//arrow funcion
const validar=()=>{
      const pro_nombre=document.querySelector("#pro_nombre");
      if (pro_nombre.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
    if (pro_calidad.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
      if (pro_tamaño.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
      if (pro_estado.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
      if (pro_descripcion.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
         if (pro_precio.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
}  
