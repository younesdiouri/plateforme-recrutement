<!DOCTYPE html>
<?php
//@DY@security
// On prolonge la session
session_start();

include("config.php");
$req='select count(*) from entreprise where login="'.$_SESSION["login"].'"';
	$resultat = mysql_query($req);
		$data = mysql_fetch_array($resultat);
		if(!$data[0])
		{
			header('Location: index.html');
			//Unsession Redirect
  exit();
		}
//Si redirection avec un bouton precedent ou venant d'un autre page on traite le formulaire		
// { Début - Première partie
if(!empty($_POST) OR !empty($_FILES))
{
//post /files var superglob stockees
    $_SESSION['sauvegarde'] = $_POST ;
    $_SESSION['sauvegardeFILES'] = $_FILES ;
    
    $fichierActuel = $_SERVER['PHP_SELF'] ;
    if(!empty($_SERVER['QUERY_STRING']))
    {
        $fichierActuel .= '?' . $_SERVER['QUERY_STRING'] ;
    }
    
    header('Location: ' . $fichierActuel);
    exit;
}
// } Fin - Première partie

// { Début - Seconde partie
if(isset($_SESSION['sauvegarde']))
{
    $_POST = $_SESSION['sauvegarde'] ;
    $_FILES = $_SESSION['sauvegardeFILES'] ;
    
    unset($_SESSION['sauvegarde'], $_SESSION['sauvegardeFILES']);
}
// } Fin - Seconde partie


?>
<html lang="fr">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link href="http://getbootstrap.com/examples/theme/theme.css" rel="stylesheet"/>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<!-- VALIDATOR FORM--><script src="validator.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	</head>
<body>
	 <?php include("nav-entreprise.php");?> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<center>
	 <div class="page-header">
	 
	 
	 <br />
        <h1>Changer Votre mot de Passe</h1> 
      </div></center>
	 

<form data-toggle="validator" role="form" action="modif-password-entreprise.php" method="post">
	  <div class="form-group col-sm-4">
    <label for="inputPassword" class="control-label">Nouveau Mot de Passe:</label>
    
      <input type="password" name="password" data-minlength="8" class="form-control" id="inputPassword" placeholder="Mot de passe" required>
      <span class="help-block">8 caractères au minimum.</span>
    </div>
    <div class="form-group col-sm-4">
	<label for="inputPassword" class="control-label">Confirmer le Mot de Passe:</label>
      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Les mots de passe ne correspondent pas" placeholder="Confirmer le mot de passe" required>
      <div class="help-block with-errors"></div>
    </div>
	<br />
    <div class="form-group col-sm-6">
    <button type="submit" name="envoyer" class="btn btn-primary">Changer</button>
  </div>
	</form>
	
	<?php
	if(isset($_POST["envoyer"]))
	{$password=$_POST["password"];
		if(ctype_alnum($password))
		{
			echo '<br /><br /><br /><br /><div class="container"><div class="alert alert-warning col-sm-6" role="alert">
			<strong>Attention!</strong>Votre mot de passe doit contenir au moins chiffres lettre et caractères spéciaux</div></div>';
		}
		else if(ctype_punct($password))
		{
			echo '<br /><br /><br /><br /><div class="container"><div class="alert alert-warning col-sm-6" role="alert">
			<strong>Attention!</strong>Votre mot de passe doit contenir au moins chiffres lettre et caractères spéciaux</div></div>';
		}
		else
		{
		
		$req="update entreprise set password='$password' where login='".$_SESSION["login"]."'";
		$sql=mysql_query($req);
		if(!$sql) echo mysql_error();
		if($sql){
		echo '<br /><br /><br /><br /><div class="container"><div class="alert alert-success col-sm-6" role="alert"><strong>Merci!</strong>Votre mot de passe a bien été modifié</div></div>';
		}
	} 
		
	}
	?>
</body>
   <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>