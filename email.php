<?php

    include("connexion_DB.php");
    include("main.php");
    
    displayPage();
	
    displayTitle("Envoi du message vers la base de données");
    //echo "";
    $ok = TRUE;

    if(empty($_POST['nom'])){
	    $ok = FALSE;
        displayMessage("Erreur de Nom", "Votre nom n'a pas été renseigné");
	}
	else
		$nom = addslashes($_POST['nom']);
		


    if(empty($_POST['prenom'])){
	    $ok = FALSE;
		displayMessage("Erreur de Prenom", "Votre prenom n'a pas été renseigné");
	}
	else
		$prenom = addslashes($_POST['prenom']);


    if(empty($_POST['objet'])){
	    $ok = FALSE;
		displayMessage("Erreur d'objet de message", "L'objet du message n'a pas été renseigné");
	}
	else
		$obj = addslashes($_POST['objet']);


    if(empty($_POST['message'])){
	    $ok = FALSE;
        displayMessage("Erreur de Message", "Votre message n'a pas été renseigné");
	}

	else
		$msg = addslashes($_POST['message']);


    $civilite = $_POST['civilite'];

    

	//$ok = FALSE;
    if($ok){
	    if(!(mysql_query("insert into email values('$civilite', '$nom', '$prenom', '$obj', '$msg', '')"))){
			displayMessage("Statut","Erreur dans l'envoie du message!");
			//echo mysql_error();
			}

		else{
			displayMail($civilite, $nom, $prenom, $obj, $msg);
			displayMessage("Statut", "Votre message a été envoyé avec succès");
			echo "<meta http-equiv=\"refresh\" content=\"5; url=index.html\"/>";
		}
	}
     else{

		displayMessage("Statut", "Veuillez renseigner tout les champs");
		echo "<meta http-equiv=\"refresh\" content=\"5; url=support.html\"/>";
	}
	displayFooter();
?>
