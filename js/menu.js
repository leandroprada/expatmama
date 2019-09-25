

var main_wrapper= document.getElementById('main_wrapper');
var player= document.getElementById('player');

var ogden = document.getElementById('ogden');
var mendes = document.getElementById('mendes');
var hernandes = document.getElementById('hernandes');
var bauman = document.getElementById('bauman');
var hoffman = document.getElementById('hoffman');
var ruttan = document.getElementById('ruttan');
var flores = document.getElementById('flores');
var dylan = document.getElementById('dylan');
var derubeis = document.getElementById('derubeis');
var powell = document.getElementById('powell');
var lane = document.getElementById('lane');
var meyer = document.getElementById('meyer');
var ortizpereira = document.getElementById('ortizpereira');
var cravero = document.getElementById('cravero');
var sans = document.getElementById('sans');
var smith = document.getElementById('smith');
var ortiz = document.getElementById('ortiz');
var badagnani = document.getElementById('badagnani');
var trosce = document.getElementById('trosce');
var sequera = document.getElementById('sequera');
var prada = document.getElementById('prada');
var higgins = document.getElementById('higgins');
var alan = document.getElementById('alan');
var podcasts_en_list = document.getElementById('podcasts_en_list');
var podcasts_es_list = document.getElementById('podcasts_es_list');
var whatsapp_list = document.getElementById('whatsapp_list');
var jun2019 = document.getElementsByClassName('jun2019');
var jul2019 = document.getElementsByClassName('jul2019');
var aug2019 = document.getElementsByClassName('aug2019');
var sep2019 = document.getElementsByClassName('sep2019');
var oct2019 = document.getElementsByClassName('oct2019');
var nov2019 = document.getElementsByClassName('nov2019');
var dec2019 = document.getElementsByClassName('dec2019');
var eng_filter_button = document.getElementById('eng_filter_button');
var esp_filter_button = document.getElementById('esp_filter_button');
var was_filter_button = document.getElementById('was_filter_button');



function showhidden(input) {
	hide_all();
	input.classList.remove("hidden");
	input.style.display = "block";
}

function showhiddendate(input) {
	hide_all_except_datepicker();
	var i;
	for (i = 0; i < input.length; i++) {
	input[i].classList.remove("hidden");
	input[i].style.display = "block";
	}
	
}


function showhiddenes(input) {
	hide_all();
	showhidden(podcasts_es_list);
	input.classList.remove("hidden");
	input.style.display = "block";
}



function setautoplay(input) {
 input.setAttribute('autoplay','');
}

function hide(input){
	input.classList.add("hidden");
	input.style.display = "none";
	
}

function hide_all(){

ogden.classList.add("hidden");
mendes.classList.add("hidden");
hernandes.classList.add("hidden");
bauman.classList.add("hidden");
hoffman.classList.add("hidden");
ruttan.classList.add("hidden");
flores.classList.add("hidden");
dylan.classList.add("hidden");
derubeis.classList.add("hidden");
powell.classList.add("hidden");
lane.classList.add("hidden");
meyer.classList.add("hidden");
ortizpereira.classList.add("hidden");
cravero.classList.add("hidden");
sans.classList.add("hidden");
ortiz.classList.add("hidden");
badagnani.classList.add("hidden");
smith.classList.add("hidden");
trosce.classList.add("hidden");
sequera.classList.add("hidden");
prada.classList.add("hidden");
higgins.classList.add("hidden");
alan.classList.add("hidden");
podcasts_en_list.classList.add("hidden");
podcasts_es_list.classList.add("hidden");
whatsapp_list.classList.add("hidden");
eng_filter_button.classList.add("hidden");
esp_filter_button.classList.add("hidden");
was_filter_button.classList.add("hidden");
datepicker.classList.add("hidden");

}

function hide_all_except_datepicker(){

ogden.classList.add("hidden");
mendes.classList.add("hidden");
hernandes.classList.add("hidden");
bauman.classList.add("hidden");
hoffman.classList.add("hidden");
ruttan.classList.add("hidden");
flores.classList.add("hidden");
dylan.classList.add("hidden");
derubeis.classList.add("hidden");
powell.classList.add("hidden");
lane.classList.add("hidden");
meyer.classList.add("hidden");
ortizpereira.classList.add("hidden");
cravero.classList.add("hidden");
sans.classList.add("hidden");
ortiz.classList.add("hidden");
badagnani.classList.add("hidden");
smith.classList.add("hidden");
trosce.classList.add("hidden");
sequera.classList.add("hidden");
prada.classList.add("hidden");
alan.classList.add("hidden");
higgins.classList.add("hidden");
podcasts_en_list.classList.add("hidden");
podcasts_es_list.classList.add("hidden");
whatsapp_list.classList.add("hidden");
eng_filter_button.classList.add("hidden");
esp_filter_button.classList.add("hidden");
was_filter_button.classList.add("hidden");



}

function show_all(){

ogden.classList.remove("hidden");
mendes.classList.remove("hidden");
hernandes.classList.remove("hidden");
bauman.classList.remove("hidden");
hoffman.classList.remove("hidden");
ruttan.classList.remove("hidden");
flores.classList.remove("hidden");
dylan.classList.remove("hidden");
derubeis.classList.remove("hidden");
powell.classList.remove("hidden");
lane.classList.remove("hidden");
meyer.classList.remove("hidden");
ortizpereira.classList.remove("hidden");
cravero.classList.remove("hidden");
smith.classList.remove("hidden");
sans.classList.remove("hidden");
ortiz.classList.remove("hidden");
badagnani.classList.remove("hidden");
trosce.classList.remove("hidden");
sequera.classList.remove("hidden");
prada.classList.remove("hidden");
higgins.classList.remove("hidden");
alan.classList.remove("hidden");
eng_filter_button.classList.remove("hidden");
esp_filter_button.classList.remove("hidden");
was_filter_button.classList.remove("hidden");

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
