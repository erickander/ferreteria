//arrow funcion
const validar=()=>{
      const per_tipo=document.querySelector("#per_tipo");
      if (per_tipo.value.length==0) {
Swal.fire({
  title: 'Campo Obligatorio',
  width: 600,
  padding: '3em',
  color: '#716add',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url(https://c.tenor.com/PDdj85iOO1sAAAAM/nyan-cat-rainbow.gif)
    left top
    no-repeat
  `
})        
 return false;

      }
      }