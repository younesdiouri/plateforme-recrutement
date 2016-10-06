<?php if(isset($_POST["envoyer"]))
{
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$mail=$_POST["mail"];
	$login=$_POST["login"];
	$password=$_POST["password"];
	
	include("config.php");
 
	$req="insert into manager (nom,prenom,mail,login,password)
	VALUES ('$nom','$prenom','$mail','$login','$password')";
	$query=mysql_query($req);
	if($query)
	{
		$success="L'ambassadeur a été ajouté.";
		
		
		
		
	}
	else
	{
		$erreur="L'inscription a échouée.";
		
		
		
	}
	
}
include('add-ambassadeur.php');
?>
