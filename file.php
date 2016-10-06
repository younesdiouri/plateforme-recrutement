<!DOCTYPE HTML>
<html>
<?php
session_start();
include("config.php");


?>
<head> 
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link href="http://getbootstrap.com/examples/theme/theme.css" rel="stylesheet"/>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body style="background:url(background-staff.jpg);">

	<div class="container">
		<form role="form" method="POST" action="file.php" enctype="multipart/form-data">	
			<div class="col-xs-12">
				<br /><br /> Pour ajouter une image à l'article.
				<div class="col-md-12">
					<h3>Cliquez sur ajouter un fichier.</h3>
					<div class="form-group">
						<label class="control-label">(Taille de 1 MO maximum)</label>
						<br /> 
					</div>
					<!-- Le contenu du formulaire est à placer ici... -->
					<input type="file" name="avatar">
					<input type="submit" name="submit">
		</form> 
		<?php
		if (isset($_POST['submit']))
			{
				$dossier = 'worker-file/';
				$fichier = basename($_FILES['avatar']['name']);
				$taille_maxi = 1000000;
				// Taille du fichier = 1 Mega  Octet
				$taille = filesize($_FILES['avatar']['tmp_name']);
				$extensions = array('.png', '.gif', '.jpg', '.jpeg');
				$extension = strrchr($_FILES['avatar']['name'], '.'); 
				//Début des vérifications de sécurité...
				if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
					{
						$erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg';
					}
					if($taille>$taille_maxi)
					{
						$erreur = 'Le fichier est trop gros...';
					}
					if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
					{
						//On formate le nom du fichier ici...
						//$nom = md5(uniqid(rand(), true));	
						$req='select id from article order by id desc limit 1'; // Afficher l'ID la plus grande
						$query=mysql_query($req);
						$res=mysql_fetch_assoc($query);
						$nom=$res["id"];
						$target = 'worker-file/'.$nom."."."jpg";
						if(move_uploaded_file($_FILES['avatar']['tmp_name'],$target)) //Si la fonction renvoie TRUE, OK
						{
							echo '<script language="Javascript">
							document.location.replace("admin-article.php"); 
							</script>'; // Javascript replacing Header for imputing Error set
						}
						else //Sinon (la fonction renvoie FALSE).
						{
							echo 'Echec de l\'upload !';
						}			
					}
					else
					{
						echo $erreur;
					}
			}// YOUNES DIOURI 
?>