<?php 
	include("nav.php");include("config.php");
	
//@DY@security
// On prolonge la session
session_start();

$req='select count(*) from worker where login="'.$_SESSION["login"].'"';
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


<head>
	
<script src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
<script src="contrat-user.js"></script>
</head>
<body>
<title>Contrat pour Workers</title>

<div class="container">
	<div class="jumbotron">
	<center><h1>Il n'y a pas de contrats à afficher pour le moment</h1>
	</div>
	</body>
	<footer><?php include("footer.html"); ?></footer>