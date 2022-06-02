//arrow funcion
const validar=()=>{
      const usu_id=document.querySelector("#usu_id");
      if (usu_id.value.length==0) {
       Swal.fire({
  icon: 'error',
  title: 'Error...',
  text: ' Usuario Obligatorio!',
})  
 return false;
 
      }
    if (dor_id.value.length==0) {
       Swal.fire({
  icon: 'error',
  title: 'Error...',
  text: ' Proveedor Obligatorio!',
})
 return false;

      }
      if (pro_id.value.length==0) {
       Swal.fire({
  icon: 'error',
  title: 'Error...',
  text: ' Producto Obligatorio!',
})
 return false;

      }
      if (inv_cantidad.value.length==0) {
       Swal.fire({
  icon: 'error',
  title: 'Error...',
  text: ' Cantidad Obligatorio!',
})
 return false;

      }
      if (inv_fecha.value.length==0) {
       Swal.fire({
  icon: 'error',
  title: 'Error...',
  text: ' Fecha Obligatorio!',
})
 return false;

      }

}  
