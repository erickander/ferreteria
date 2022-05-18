//arrow funcion
const validar=()=>{
      const per_tipo=document.querySelector("#per_tipo");
      if (per_tipo.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
      }