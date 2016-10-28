<?php
	$id=$_POST["id"];
	$nom=$_POST["nom"];
	$secteur_activite=$_POST["secteur_activite"];
	$ville=$_POST["ville"];
	$adresse=$_POST["adresse"];
	$cp=$_POST["cp"];
	$siteweb=$_POST["siteweb"];
	$contact_nom=$_POST["contact_nom"];
	$contact_prenom=$_POST["contact_prenom"];
	$contact_telephone=$_POST["contact_telephone"];
	$contact_email=$_POST["contact_email"];
	
include("config.php");
$req="UPDATE entreprise 
        SET nom='$nom', secteur_activite='$secteur_activite', ville='$ville', adresse='$adresse', cp='$cp', siteweb='$siteweb', contact_nom='$contact_nom', 
		contact_prenom='$contact_prenom', contact_telephone='$contact_telephone', contact_email='$contact_email'  
		WHERE id='$id'";
          
mysql_query($req);	

header("location:list-entreprise.php");


?>