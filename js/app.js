let btn = document.querySelectorAll('#btn');





 btn.forEach( item => {
 item.addEventListener('click',(e)=>{
   e.preventDefault();
  let datas = e.target.parentElement;
  let titulo = datas.querySelector('h2').textContent;
  let imagen = datas.querySelector('img').src;
  let parrafo = datas.querySelector('p').textContent;


  window.location.href="informacionNoticia.php?titulo=" + titulo + "&parrafo=" + parrafo + "&img=" + imagen;

 });

 })