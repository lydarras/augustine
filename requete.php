<!--function
getMail()
getNbMail()
-->

<?php
function getMail(){
	$tab = array();
	$res = mysql_query("select civilite, nom, prenom, objet, message from email;");
	while($line = mysql_fetch_assoc($res)){
		$tab[] = $line;
		}
	}
	
