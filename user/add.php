<?php
include("config.php");
if(isset($_POST["envoyer"]))
{
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$telephone=$_POST["telephone"];
	$ville=$_POST["ville"];
	$mail=$_POST["mail"];
	$cp=$_POST["codepostal"];
	$adresse=$_POST["adresse"];
	$metier=$_POST["metier"];
	$date_naissance=$_POST["date_naissance"];
	$login=$_POST["login"];
	$password=$_POST["password"];
	$erreur="";
	
	
	
	$logintest="select count(*) from worker where login='".$_POST["login"]."'";
	$queryLogin=mysql_query($logintest);
	
	$assoc=mysql_fetch_array($queryLogin);
	if($assoc[0]==1)
	{
		$erreur.="Ce login est déja utilisé !";
		include("inscription.php");
	}
	else
	{
		$logintest="select count(*) from entreprise where login='".$_POST["login"]."'";
		$queryLogin=mysql_query($logintest);
		
		$assoc=mysql_fetch_array($queryLogin);
		if($assoc[0]==1)
		{
			$erreur.="Ce login est déja utilisé !";
			include("inscription.php");
		}
		else
		{
			
		
		// FIN DU TEST 
		$req="insert into worker (nom,prenom,telephone,ville,mail,cp,adresse,metier,date_naissance,login,password) 
		VALUES ('$nom','$prenom','$telephone','$ville','$mail','$cp','$adresse','$metier','$date_naissance','$login','$password')";
		$query=mysql_query($req);
		
		if($query)
		{	session_start();
		$_SESSION["login"] = $login;
		//$req1="select id from worker where login='".$_SESSION["login"]."'";
		//$query1=mysql_query($req1);
		//$assoc=mysql_fetch_assoc($query1);
		//while($assoc)
		//{
		//	$idw=$assoc["id"];
		//	$ins="insert into worker_cv(id_worker) VALUES ('$idw')";
		//	$insquery=mysql_query($ins);
		//	$assoc=mysql_fetch_assoc($query1);
		//}
		$success="Vous êtes bien inscrits!";
		include("accueil-inscription.php");
		
		}
 
	
	
		else
		{
		$erreur.="<br />L'inscription a échouée.";
		include("incription.php");
		}
	
		}
	}
}
?>

