document.querySelector('#fa-button').addEventListener('click', hide = function(){
    document.getElementById('search_area_visible').style.visibility = 'hidden';
    document.getElementById('search_area_hidden').style.visibility = 'visible';
}, false);

let mybutton = document.getElementById("btn-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// const jq = jQuery.noConflict();

// jq(document).ready(function(){
//   jq("#myModal").modal('show');
//     });

// MODAL
$(document).ready(function() {
  if (document.cookie.indexOf("FooBar=true") == -1) {
    document.cookie = "FooBar=true; max-age=86400"; // 86400: seconds in a day
    $('#myModal').modal('show');
  }
});

//HOVER DROPDOWN
function toggleDropdown (e) {
  const _d = $(e.target).closest('.dropdown'),
    _m = $('.dropdown-menu', _d);
  setTimeout(function(){
    const shouldOpen = e.type !== 'click' && _d.is(':hover');
    _m.toggleClass('show', shouldOpen);
    _d.toggleClass('show', shouldOpen);
    $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
  }, e.type === 'mouseleave' ? 300 : 0);
}

$('body')
  .on('mouseenter mouseleave','.dropdown',toggleDropdown)
  .on('click', '.dropdown-menu a', toggleDropdown);

  //FUNCIONALIDADES FILTRO
function open_section(clicado){
  document.getElementById("marcas").style.display = 'block';
  document.getElementById("testeh").innerHTML += '<h6 id="h_filtro" style="background-color: #000; width:auto; padding:5px 15px 5px 15px; color: #fff; ">'+clicado+'<span style="color: #fff; margin-left:8px; margin-right: -15px; background-color:#8B8B8B; padding:4px 15px 4px 15px; cursor:pointer; ">x</span></h6>';

}

function fecharFiltro(){
  document.getElementById("h_filtro").style.display = 'none';
  document.getElementById("categoria").style.display = 'none';
  document.getElementById("formato").style.display = 'none';
  document.getElementById("tamanho").style.display = 'none';
  document.getElementById("genero").style.display = 'none';
  document.getElementById("material").style.display = 'none';
  document.getElementById("tipo-lente").style.display = 'none';
  document.getElementById("cor").style.display = 'none';
  document.getElementById("preco").style.display = 'none';
}
