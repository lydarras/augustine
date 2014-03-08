<?php

if(!($cid = mysql_connect("localhost", "bastos", "atb9bjs3"))){
        echo mysql_error();
        die("erreur");
        }

else{
        mysql_select_db("Augustine");
	mysql_query("SET NAMES UTF8"); 
	}
?>
