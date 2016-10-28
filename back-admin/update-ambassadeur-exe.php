<?php
	$id=$_POST["id"];
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$mail=$_POST["mail"];
	$nb=$_POST["nb_worker"];
	$login=$_POST["login"];
	$password=$_POST["password"];
	
	
include("config.php");
$req="UPDATE manager 
        SET nom='$nom', prenom='$prenom', mail='$mail', nb_worker='$nb', login='$login', password='$password'   
		WHERE id='$id'";
          
mysql_query($req);	

header("location:list-ambassadeur.php");


?>