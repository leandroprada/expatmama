
var podcasts_en = document.getElementById('but_news');
var but_media = document.getElementById('but_media');
var but_profiles = document.getElementById('but_profiles');
var but_contact = document.getElementById('but_contact');
var but_projects = document.getElementById('but_projects');

var view0 = document.getElementById('view0');
var view2 = document.getElementById('view2');
var view1 = document.getElementById('view1');
var view3 = document.getElementById('view3');
var view4 = document.getElementById('view4');
var view5 = document.getElementById('view5');

var main_wrapper= document.getElementById('main_wrapper');
var player= document.getElementById('player');
var ogden = document.getElementById('ogden');
var mendes = document.getElementById('mendes');

function showhidden(input) {
	hide_all_others();
	input.classList.remove("hidden");
} 

function setautoplay() {
 ogdenaudio.setAttribute('autoplay','');
}

function hide_all_others(){

ogden.classList.add("hidden");
mendes.classList.add("hidden");
}


function showdiv(input) {
  ocultar_todos();
  input.style.display = "block";
  input.style.opacity = 1;
}

function showcontent(input) {
  ocultar_todos_content();
  input.style.display = "block";
  input.style.opacity = 1;
}

function home() {
  ocultar_todos();
  view0.style.display = "block";
  caja0.style.display = "block";

}
