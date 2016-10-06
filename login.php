<?php
include("config.php");
session_start();
	if (isset($_POST['connexion'])) {
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['password']) && !empty($_POST['password']))) 
	{

		$login = $_POST["login"];
		$password = $_POST["password"];
		
		$req = "select count(*) FROM worker WHERE login='$login' and password='$password'";
		$resultat = mysql_query($req);
		$data = mysql_fetch_array($resultat);
		if($data[0]==1)
		{
			$_SESSION["login"] = $login;
			
			header("location:membres.php");
			
		}
		else
		{
			$req = "select count(*) FROM admin WHERE login='$login' and password='$password'";
			$resultat = mysql_query($req);
			$data = mysql_fetch_array($resultat);
			if($data[0]==1){
				$_SESSION["login"] = $login;
			
				header("location:admin.php");
			}
			else
			{
				$req = "select count(*) FROM entreprise WHERE login='$login' and password='$password'";
				$resultat = mysql_query($req);
				$data = mysql_fetch_array($resultat);
				if($data[0]==1){
				$_SESSION["login"] = $login;
			
				header("location:entreprise-member.php");
				}
				else
				{
				$req = "select count(*) FROM manager WHERE login='$login' and password='$password'";
				$resultat = mysql_query($req);
				$data = mysql_fetch_array($resultat);
				if($data[0]==1)
				{
					$_SESSION["login"] = $login;
			
					header("location:manager.php");
				}
				else
				{
					include('index.html');
				}
				}
			}
		}
	
		
	}
	else{
		
	include('index.html');
	}
	}
	
	?>