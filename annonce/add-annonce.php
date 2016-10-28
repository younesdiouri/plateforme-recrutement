<!DOCTYPE HTML>
<html>
<?php include("config.php");
?>
<head> <meta charset="utf-8"/>
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
<link rel="stylesheet" href="add-annonce.css">
<script src="add-annonce.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include("simple-nav.php");include("config.php"); ?>
<br /><br />
<title>Annonces</title>

<body>
<div class="container">

<div class="col-md-5">
    <div class="form-area">  
        <form role="form" method="POST" action="add-annonce.php">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Ajoutez votre annonce</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="nom" placeholder="Nom" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="mail" placeholder="Votre e-mail" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="numéro mobile" required>
					</div>
					<div class="form-group">
					
						<input type="text" class="form-control" id="date" name="date" placeholder="date de début de l'annonce (JJ-MM-YYYY)" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="titre" placeholder="Titre" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="categorie" name="categorie" placeholder="Catégorie (baby-sitting, ménage, repassage, etc)" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" name="corps" type="textarea" id="message" placeholder="Votre annonce" maxlength="300" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Vous avez atteint la limite</p></span>                    
                    </div>
					<div class="g-recaptcha" data-sitekey="6LfVGR0TAAAAAIGeOfBkJXQYt7C3sS0O10HxoX-2"></div>
        <input type="submit" id="submit" name="submit" value="Soumettre" class="btn btn-primary pull-right" />
        </form>
    </div>
</div>
</div>
<script src="add-annonce.js"></script>
<?php 
if(isset($_POST["submit"]))
{
	
	$nom=$_POST["nom"];
	$mobile=$_POST["mobile"];
	$ville=$_POST["ville"];
	$mail=$_POST["mail"];
	$date=$_POST["date"];
	$titre=$_POST["titre"];
	$categorie=$_POST["categorie"];
	$corps=$_POST["corps"];
	
	$erreur="";
	$req= "insert into annonce(titre,date,categorie,corps,ville,nom,mail,mobile) VALUES ('$titre','$date','$categorie','$corps','$ville','$nom','$mail','$mobile')";
	$query=mysql_query($req);
	if($query)
	{
		echo '<div class="container"><div class="alert alert-success" role="alert">
	<strong>Bravo!</strong> Votre annonce a été mise en ligne. </div></div>';
	}
	else
	{
		echo '<div class="container"><div class="alert alert-danger" role="alert">
	<strong>Désolé!</strong> Il y a eu un problème avec votre annonce. </div></div>';
	}
	
	
}
?>