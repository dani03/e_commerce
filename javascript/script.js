// page sansung

var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n){
  showDivs(slideIndex += n);
}

function showDivs(n){
   var i;
   var photos = document.getElementsByClassName("slides");
   if(n > photos.length){
     slideIndex = 1
   }
   if(n < 1){
       slideIndex = photos.length
   }
   for(i = 0; i < photos.length; i++){
     photos[i].style.display = "none";
   }
   photos[slideIndex-1].style.display = "block";
}

$(document).ready(function(){
  $("experia").hide();
});
