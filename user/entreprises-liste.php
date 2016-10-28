<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<!DOCTYPE HTML>	


<html>

<head> 
<meta charset="utf-8" />
    <!-- Bootstrap Core CSS -->
    <link href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script src="jquery.js"></script>

<link rel="stylesheet" href="entreprises-accueil.css">
</head>

<body style="background:url(background-staff.jpg);">
<?php 
	include("simple-nav.php");include("config.php");
?><br /><br />
<title>Entreprises</title>
<div class="container">
    <div class="row">
		<?php 

$req = "select * from entreprise order by nom";
$resultat = mysql_query($req);
if(!$resultat) echo mysql_error();
$ligne = mysql_fetch_assoc($resultat);

while($ligne)
{ ?>
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="staff-img/community.jpg" class="img-responsive" alt="no-avatar">
                <div>
                  <a href=<?php echo "fiche-entreprise.php?num='".$ligne["id"]."'";?> class="btn">Afficher</a>
                  <a href="#" class="btn">Noter</a>
                </div>
              </div>
		
              <h3><?php echo $ligne["nom"]; ?></a></h3>
              <div class="pi-price"><?php echo $ligne["secteur_activite"]; ?></div>
              <form action="entreprises-liste.php" method="POST" role="form"> <input type="hidden"  name="id" value="<?php echo $ligne["id"]; ?>"></input><input type="submit" class="btn add2cart" name="envoyer" value="Interessé?"></input></form>
              <div class="sticker sticker-new"></div>
            </div>
        </div>
<?php $ligne = mysql_fetch_assoc($resultat);} ?>
        
        </div>
		
    </div>
	
</div>
<br>
<br>
<center>
<strong>Powered by <a href="http://j.mp/metronictheme" target="_blank">KeenThemes</a></strong>
</center>
<br>
<br>
<div class="container">
<div class="row">
<?php
if(isset($_POST["envoyer"]))
{
	$id=$_POST["id"];
	$requete="select nom from entreprise where id=".$id."";
	$Newquery=mysql_query($requete);
	$datas=mysql_fetch_assoc($Newquery);
	echo "<div class=\"alert alert-danger fade in\" role=\"alert\" id=\"scrolldown\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
	Pour soumettre une notification à l'entreprise <strong>".$datas["nom"]."</strong> veuillez vous inscrire ou vous connecter.";
}
 ?>
</div>
</div>