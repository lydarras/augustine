

function surligne(champ, erreur){
	if(erreur){
		champ.style.backgroundColor = "#F2DEDE";
		champ.style.borderColor = "#EBCCD1";
	}
	else{	
		champ.style.backgroundColor = "#DFF0D8";
		champ.style.borderColor = "#D6E9C6";
	}
}


// FONCYION DE VERIFICATION DES CHAMPS

function verifPrenom(champ){
	if(champ.value.length < 1 || champ.value.length > 29){
		surligne(champ, true);
		return false;
	}

	else{
		surligne(champ, false);
		return true;
	}
}

function verifNom(champ){
	if(champ.value.length < 1 || champ.value.length > 29){
		surligne(champ, true);
		return false;
	}

	else{
		surligne(champ, false);
		return true;
	}
}

function verifObjet(champ){
	if(champ.value.length < 1 || champ.value.length > 49){
		surligne(champ, true);
		return false;
	}

	else{
		surligne(champ, false);
		return true;
	}
}

function verifMessage(champ){
	if(champ.value.length < 1 || champ.value.length > 999){
		surligne(champ, true);
		return false;
	}

	else{
		surligne(champ, false);
		return true;
	}
}


// FONCTION DE VERIFICATION LORS DE L ENVOIE

function verifForm(form){
	var ok = true;
	if(!verifPrenom(form.prenom))
		ok = false;
	if(!verifNom(form.nom))
		ok = false;
	if(!verifObjet(form.objet))
		ok = false;
	if(!verifMessage(form.message))
		ok = false;

	if(!ok)
		popup_erreur.style.visibility = "visible";
	return ok;
}

function closeError(){
	popup_erreur.style.visibility = "hidden";
}


