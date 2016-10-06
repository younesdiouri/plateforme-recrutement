
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php include("simple-nav.php"); ?>
<title>Accueil Staff Emploi</title></head>

</head>
<br /><br />
<body style="background:url(background-staff.jpg);">
<br /><br /><br />
<div class="container">
<div class="row">
<center>
<div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
              <h4 class="modal-title" id="myModalLabel">Se connecter à Staff-Emploi</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="login.php">
                              <div class="form-group">
                                  <label for="username" class="control-label">Identifiant</label>
                                  <input type="text" class="form-control" id="username" name="login" value="" required="" title="Saisir votre identifiant" placeholder="login">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group" id="ancre">
                                  <label for="password" class="control-label">Mot de Passe</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Saisir vorte mot de passe">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Mauvais mot de passe ou login</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Se rappeler de l'identifiant
                                  </label>
                                  <p class="help-block">(s'il s'agit d'un ordinateur privé)</p>
                              </div>
                              <input type="submit" name="connexion" value="Se Connecter" class="btn btn-success btn-block" />
                              
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Vous n'êtes pas inscrits? Rejoignez nous  <span class="text-success">GRATUITEMENT</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Facilité d'inscription</li>
                          <li><span class="fa fa-check text-success"></span> Votre profil en ligne</li>
                          <li><span class="fa fa-check text-success"></span> Une Interface unique</li>
                          <li><span class="fa fa-check text-success"></span> Un Staff qui vous accompagne</li>
                          <li><span class="fa fa-check text-success"></span> Une communauté dynamique!</li>
                          
                      </ul>
                      <p><a href="inscription.php" class="btn btn-md btn-info btn-block">Je suis Worker!</a></p><p><strong>OU</strong></p><p><a href="inscription-entreprise.php" class="btn btn-md btn-info btn-block">Je suis Recruteur!</a></p>
					  
                  </div>
              </div>
          </div>
      </div>
	</div>
	<br /> 
	<br />
	
	<?php
	if(isset($success))
	{
		echo '<br /><div class="alert alert-success" role="alert">
	<strong>Merci!</strong> '.$success.'</div>';
	}
	?>
	<center><a href="index.html"><button class="btn btn-default btn-lg">Revenir à la page d'accueil</button></a></center>
</div>
	  </body>