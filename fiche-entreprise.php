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

<?php include("simple-nav.php");
$num=$_GET["num"];   
$req = "select * from entreprise where id=$num";
$resultat = mysql_query($req);
$ligne = mysql_fetch_assoc($resultat);
while($ligne)
{
	


 ?>
<br /><br />
<title>Fiche Entreprise</title>
</head>

<body>


<div class="container">
    <div class="row">
	<div class="container-fluid well span6">
	<div class="row-fluid">
        <div class="span2" >
		    <img src="staff-img/entreprise.jpg" class="img-circle">
        </div>
        
        <div class="span8">
            <h3><?php echo $ligne["nom"]; ?></h3>
            <h6><?php echo $ligne["secteur_activite"]; ?></h6>
            <h6><?php echo $ligne["ville"]; ?></h6>
            <h6><?php echo $ligne["cp"]; ?></h6>
            <h6><a href="accueil-inscription.php">Plus... </a></h6>
        </div>
        
        <div class="span2">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                    Action 
                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="accueil-inscription.php"><span class="icon-wrench"></span> S'inscrire</a></li>
                    <li><a href="entreprises-liste.php"><span class="icon-trash"></span> Revenir</a></li>
                </ul>
            </div>
        </div>
</div>
</div>
<?php
$ligne = mysql_fetch_assoc($resultat);
}
 ?>