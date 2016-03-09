
function changerVilles()
{
	document.frm.ville.length=0;
	
	var france = ["Paris", "Nice", "Marseille", "Lyon"];
	var etats_unis = ["New York", "Chicago", "Houston", "Dallas"];
	var tunisie = ["Mahdia", "Monastir", "Sousse", "Tunis"];
	
	if(document.frm.pays.value == "France"){
		for(i = 0; i < france.length ; i++){
			AjouterOption(france[i]);
		}
	}
	
	if(document.frm.pays.value == "Etats_Unis"){
		for(i=0; i < etats_unis.length ;i++){
			AjouterOption(etats_unis[i]);
		}
	}
	
	if(document.frm.pays.value == "Tunisie"){
		for(i = 0; i < tunisie.length ; i++){
			AjouterOption(tunisie[i]);
		}
	}
	
}

function AjouterOption(title) {
 nouvel_element = new Option(title,title,false,true);
 document.frm.ville.options[document.frm.ville.length] = nouvel_element;
}

