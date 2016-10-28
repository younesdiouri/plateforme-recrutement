<?php

	$id=$_POST["id"];
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$telephone=$_POST["telephone"];
	$ville=$_POST["ville"];
	$mail=$_POST["mail"];
	$cp=$_POST["cp"];
	$adresse=$_POST["adresse"];
	$metier=$_POST["metier"];
	$date_naissance=$_POST["date_naissance"];
	
include("config.php");
$req="UPDATE worker 
        SET nom='$nom', prenom='$prenom', ville='$ville', mail='$mail', cp='$cp', adresse='$adresse', metier='$metier', date_naissance='$date_naissance' 
		WHERE id='$id'";
          
mysql_query($req);	

header("location:list-worker.php");


?>