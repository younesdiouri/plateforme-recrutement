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
	
	include("config.php");
 
	$req="insert into worker (nom,prenom,telephone,ville,mail,cp,adresse,date_naissance,metier)
	VALUES ('$nom','$prenom','$telephone','$ville','$mail','$cp','$adresse','$date_naissance','$metier')";
	$query=mysql_query($req);
	if($query)
	{
		$req1="select id from worker where nom='".$nom."' and prenom='".$prenom."'";
		$query1=mysql_query($req1);
		$assoc=mysql_fetch_assoc($query1);
		while($assoc)
		{
			$idw=$assoc["id"];
			$ins="insert into worker_cv(id_worker) VALUES ('$idw')";
			$insquery=mysql_query($ins);
			$assoc=mysql_fetch_assoc($query1);
		}
		$success="Le worker a été ajouté.";
		echo $success;
		
		
		
	}
	else
	{
		$erreur="L'inscription a échouée.";
		echo $erreur;
		
		
	}
	
}
include('add-worker.php');
?>
