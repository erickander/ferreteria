//arrow funcion
const validar=()=>{
      const fac_id=document.querySelector("#fac_id");
      if (fac_id.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
    if (dat_cantidad.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
      if (pro_id.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
      if (dat_VU.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
      if (dat_VT.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
         
}  