let menu=document.querySelector('#menu');
let nav=document.querySelector('.nav');
menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  nav.classList.toggle('active');
  searchicon.classList.remove('fa-times');
  searchform.classList.remove('active');
}
let searchicon=document.querySelector('#search');
let searchform=document.querySelector('.search');
searchicon.onclick = () =>{
  searchicon.classList.toggle('fa-times');
  searchform.classList.toggle('active');
  menu.classList.remove('fa-times');
  nav.classList.remove('active');
}

window.onscroll = () =>{
  menu.classList.remove('fa-times');
  nav.classList.remove('active');
  searchicon.classList.remove('fa-times');
  searchform.classList.remove('active');
}
