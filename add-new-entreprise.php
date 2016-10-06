<?php
include("config.php");
if(isset($_POST["envoyer"]))
{
	$nom=$_POST["nom"];
	$secteur_activite=$_POST["secteur_activite"];
	$contact_telephone=$_POST["contact_telephone"];
	$ville=$_POST["ville"];
	$contact_email=$_POST["contact_email"];
	$cp=$_POST["cp"];
	$adresse=$_POST["adresse"];
	$siret=$_POST["siret"];
	$contact_nom=$_POST["contact_nom"];
	$contact_prenom=$_POST["contact_prenom"];
	$login=$_POST["login"];
	$password=$_POST["password"];
	$erreur="";
	
	
	$logintest="select count(*) from entreprise where login='".$_POST["login"]."'";
	$queryLogin=mysql_query($logintest);
	if(!$queryLogin)echo mysql_error();
	$assoc=mysql_fetch_array($queryLogin);
	if($assoc[0]==1)
	{
		$erreur.="Ce login est déja utilisé !";
		include("inscription.php");
	}
	else
	{
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
		
	
 // FIN DU TEST 
	$req="insert into entreprise (nom,secteur_activite,ville,adresse,cp,contact_prenom,contact_nom,contact_telephone,contact_email,siret,login,password) 
	VALUES ('$nom','$secteur_activite','$ville','$adresse','$cp','$contact_prenom','$contact_nom','$contact_telephone','$contact_email','$siret','$login','$password')";
	$query=mysql_query($req);
	if($query)
	{	session_start();
		$_SESSION["login"] = $login;
		$success="Vous êtes bien inscrits!";
		include("accueil-inscription.php");
		
	}
 
	
	
	else
	{
		$erreur.="<br />L'inscription a échouée.";
		include("inscription.php");
	}
	 
	}
}
}

?>

