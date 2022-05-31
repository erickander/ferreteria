//arrow funcion
const validar=()=>{
      const usu_id=document.querySelector("#usu_id");
      if (usu_id.value.length==0) {
        Swal.fire({
  title: 'Campo Obligatorio',
  width: 600,
  padding: '3em',
  color: '#716add',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url(https://c.tenor.com/kMkgKTD1s_AAAAAC/no-pikachu.gif)
    left top
    no-repeat
  `
});              
 return false;
 
      }
    if (dor_id.value.length==0) {
        Swal.fire({
  title: 'Campo Obligatorio',
  width: 600,
  padding: '3em',
  color: '#716add',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url(https://c.tenor.com/kMkgKTD1s_AAAAAC/no-pikachu.gif)
    left top
    no-repeat
  `
});              
 return false;

      }
      if (pro_id.value.length==0) {
        Swal.fire({
  title: 'Campo Obligatorio',
  width: 600,
  padding: '3em',
  color: '#716add',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url(https://c.tenor.com/kMkgKTD1s_AAAAAC/no-pikachu.gif)
    left top
    no-repeat
  `
});              
 return false;

      }
      if (inv_cantidad.value.length==0) {
        Swal.fire({
  title: 'Campo Obligatorio',
  width: 600,
  padding: '3em',
  color: '#716add',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url(https://c.tenor.com/kMkgKTD1s_AAAAAC/no-pikachu.gif)
    left top
    no-repeat
  `
});              
 return false;

      }
      if (inv_fecha.value.length==0) {
        Swal.fire({
  title: 'Campo Obligatorio',
  width: 600,
  padding: '3em',
  color: '#716add',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url(https://c.tenor.com/kMkgKTD1s_AAAAAC/no-pikachu.gif)
    left top
    no-repeat
  `
});              
 return false;

      }

}  
