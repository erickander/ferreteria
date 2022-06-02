//arrow funcion
const validar=()=>{
      const cli_id=document.querySelector("#cli_id");
      if (cli_id.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Cliente Obligatorio!',
});              
 return false;

      }
    if (fac_numero_de_factura.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Numero de Factura Obligatorio!',
});              
 return false;

      }
      if (fac_iva.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Iva Obligatorio!',
});              
 return false;

      }
      if (fac_descuento.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Descuento Obligatorio!',
});              
 return false;

      }
      if (fac_observaciones.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Observaciones Obligatorio!',
});              
 return false;

      }
         if (fac_estado.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Estado Obligatorio!',
});              
 return false;

      }
         if (fac_total.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Total Obligatorio!',
});              
 return false;

      }
       if (cli_id.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Cliente Obligatorio!',
});              
 return false;

      }
}  

