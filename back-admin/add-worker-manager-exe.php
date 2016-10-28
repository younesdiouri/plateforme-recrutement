<?php if(isset($_POST["envoyer"]))
{
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$telephone=$_POST["telephone"];
	$ville=$_POST["ville"];
	$mail=$_POST["mail"];
	$cp=$_POST["cp"];
	$adresse=$_POST["adresse"];
	$metier=$_POST["metier"];
	$date_naissance=$_POST["date_naissance"];
	$id=$_POST["id"];
	include("config.php");
 
	$req="insert into worker (nom,prenom,telephone,ville,mail,cp,adresse,date_naissance,metier,manager_id)
	VALUES ('$nom','$prenom','$telephone','$ville','$mail','$cp','$adresse','$date_naissance','$metier','$id')";
	$query=mysql_query($req);
	if($query)
	{
		$success="Le worker a été ajouté.";
		echo $success;
		
		
		
	}
	else
	{
		$erreur="L'inscription a échouée.";
		echo $erreur;
		
		
	}
	
}
include('add-worker-manager.php');
?>
