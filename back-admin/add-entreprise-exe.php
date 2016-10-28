<?php if(isset($_POST["envoyer"]))
{
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
	$siret=$_POST["siret"];
	$login=$_POST["login"];
	$password=$_POST["password"];
	include("config.php");
 
	$req="insert into entreprise (nom,secteur_activite,ville,adresse,cp,siteweb,contact_nom,contact_prenom,contact_telephone,contact_email,siret,login,password)
	VALUES ('$nom','$secteur_activite','$ville','$adresse','$cp','$siteweb','$contact_nom','$contact_prenom','$contact_telephone','$contact_email','$siret','$login','$password')";
	$query=mysql_query($req);
	if($query)
	{
		$success="L'entreprise a été ajouté.";
		echo $success;
		
		
		
	}
	else
	{
		echo mysql_error()."<br />" .$query."<br />";
		$erreur="L'inscription a échouée.";
		echo $erreur;
		
		
	}
	
}
include("add-entreprise.php");

?>
