var num = 5; 
function ajout(){ 
num++; 
if(num <= 10){ 
var form = document.getElementById('upload'); 
var champ = document.createElement('input'); 
champ.setAttribute('type','file'); 
champ.setAttribute('name','fichier'+num); 
champ.setAttribute('class','span4 fg-color-red'); 
form.appendChild(champ); 
if(num==10)
{
	var plus = document.getElementById('plus');
	plus.style.visibility = "hidden"; 
}
} 

} 