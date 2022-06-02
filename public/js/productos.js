//arrow funcion
const validar=()=>{
      const pro_nombre=document.querySelector("#pro_nombre");
      if (pro_nombre.value.length==0) {
       Swal.fire({
  icon: 'error',
  title: 'Error...',
  text: ' Nombre Obligatorio!',
})
 return false;
 
      }
    if (pro_calidad.value.length==0) {
       Swal.fire({
  icon: 'error',
  title: 'Error...',
  text: ' Calidad Obligatorio!',
})
 return false;

      }
      if (pro_tamaño.value.length==0) {
       Swal.fire({
  icon: 'error',
  title: 'Error...',
  text: ' Tamaño Obligatorio!',
})
 return false;

      }
      if (pro_estado.value.length==0) {
       Swal.fire({
  icon: 'error',
  title: 'Error...',
  text: ' Estado Obligatorio!',
})
 return false;

      }
      if (pro_descripcion.value.length==0) {
       Swal.fire({
  icon: 'error',
  title: 'Error...',
  text: ' Descripcion Obligatorio!',
})
 return false;

      }
      if (pro_precio.value.length==0) {
       Swal.fire({
  icon: 'error',
  title: 'Error...',
  text: ' Precio Obligatorio!',
})
 return false;

      }

}  
