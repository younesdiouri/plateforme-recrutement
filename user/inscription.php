<!DOCTYPE HTML>
<html>

<head>
		<meta charset="utf-8" />
	<link href="inscription.css" rel="stylesheet">

     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link href="http://getbootstrap.com/examples/theme/theme.css" rel="stylesheet"/>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script src="inscription.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<title>Inscription Worker</title></head>
<?php
include("simple-nav.php");
 ?>
 <script type="text/javascript">
$(document).ready(function()
{    
 $("#username").keyup(function()
 {  
  var name = $(this).val(); 
  
  if(name.length > 5)
  {  
   $("#result").html('<img src="loader.gif"/> Recherche...');
   
   $.post("inscription-checker.php", $("#reg-form").serialize())
    .done(function(data){
    $("#result").html(data);
   });
   
   $.ajax({
    
    type : 'POST',
    url  : 'inscription-checker.php',
    data : $(this).serialize(),
    success : function(data)
        {
              $("#result").html(data);
           }
    });
    return false;
   
  }
  else
  {
   $("#result").html('Doit contenir plus de 5 caractères');
  }
 });
 
 
  $("#mail").keyup(function()
 {  
  var mail = $(this).val(); 
  
    if(mail.indexOf("@") >= 0)
	{
   $("#result2").html('<img src="loader.gif"/> Recherche...');
   
   $.post("mail-checker.php", $("#reg-form").serialize())
    .done(function(data){
    $("#result2").html(data);
   });
   
   $.ajax({
    
    type : 'POST',
    url  : 'mail-checker.php',
    data : $(this).serialize(),
    success : function(data)
        {
              $("#result2").html(data);
           }
    });
    return false;
	}
   else
  {
   $("#result2").html('<font class="red">Doit contenir un @</font>');
  }
  });
  
 });

</script>

</head>

<body>

<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Inscription</p>  
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Identifiants</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Validation</p>
        </div>
    </div>
</div>
<form role="form" method="POST" action="add.php" id="reg-form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Inscription</h3>
				<?php
	if(isset($erreur))
	{
		echo '<br /><div class="alert alert-danger" role="alert">
	<strong>Oups!</strong> '.$erreur.'</div>';
	}
	?>
                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input  maxlength="100" type="text" name="nom" required="required" class="form-control" placeholder="Saisir nom"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom</label>
                    <input maxlength="100" type="text" name="prenom" required="required" class="form-control" placeholder="Saisir prenom" />
                </div>
				
				<div class="form-group">
				<label class="control-label">Date de naissance (JJ-MM-YYYY)</label>
				<input maxlength="100" type="text" name="date_naissance" required="required" class="form-control" placeholder="Saisir date de naissance" />
                </div>
				
				<div class="form-group">
                    <label class="control-label">Metier</label>
                    <input maxlength="100" type="text" name="metier" required="required" class="form-control" placeholder="Saisir metier" />
                </div>
				
                
				<div class="form-group">
                    <label class="control-label">Telephone</label>
                    <input maxlength="10" type="text" name="telephone" required="required" class="form-control" placeholder="Saisir telephone" />
                </div>
				
				<div class="form-group">
                    <label class="control-label">E-mail</label>
                    <input maxlength="100" type="text" name="mail" id="mail" required="required" class="form-control" placeholder="Saisir e-mail" />
               <div id="result2"></div> </div>
				
				<div class="form-group">
                    <label class="control-label">Adresse</label>
                    <input maxlength="100" type="text" name="adresse" required="required" class="form-control" placeholder="Saisir adresse" />
                </div>
				
				<div class="form-group">
                    <label class="control-label">Code Postal</label>
                    <input maxlength="5" type="text" name="codepostal" required="required" class="form-control" placeholder="Saisir Code Postal" />
                </div>
				
				<div class="form-group">
                    <label class="control-label">Ville</label>
                    <input maxlength="100" type="text" name="ville" required="required" class="form-control" placeholder="Saisir ville" />
                </div>
				
				
            <!-- /input-group image-preview [TO HERE]--> 
        
</div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Suivant</button>
            </div>
        </div>
    
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Vos identifiants</h3>
                <div class="form-group">
                    <label class="control-label">Identifiant:</label>
                    <input maxlength="200" type="text" name="login" id="username" required="required" class="form-control" placeholder="Saisr Identifiant" />
                <div id="result"></div></div>
                <div class="form-group">
                    <label class="control-label">Mot de Passe:</label>
                    <input maxlength="200" type="password" name="password" required="required" class="form-control" placeholder="Saisir Mot de Passe"  />
                </div>
				<div class="g-recaptcha" data-sitekey="6LfVGR0TAAAAAIGeOfBkJXQYt7C3sS0O10HxoX-2"></div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Suivant</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        
		<div class="container">
	<div class="jumbotron">
	<center><h1> Charte Ethique</h1>
	</div>
<div class="container">
<div class="row">
<p class="MsoNormal"><o:p>&nbsp;</o:p></p>



<p class="MsoNormal" align="center" style="text-align:center"><o:p>&nbsp;</o:p></p>

<p class="MsoNormal" style="text-align:justify">Afin de garantir une qualité
optimale à ses <span style="color:#0070C0">Staffeurs Workers </span>et à ses <span style="color:red">Staffeurs Recruteurs</span>, voici ci-dessous les engagements
de STAFF EMPLOI&nbsp;:<o:p></o:p></p>

<p class="MsoNormal" style="text-align:justify"><b><span style="color:#0070C0">Pour les Staffeurs Workers&nbsp;:<o:p></o:p></span></b></p>

<p class="MsoNormal" style="text-align:justify">Nous nous engageons dans la lutte
contre la non-discrimination en mettant en avant vos compétences et vos
qualités humaines lors de vos recherches d’emploi. En effet, les <span style="color:red">Staffeurs Recruteurs </span>n’auront jamais la visibilité sur
(votre sexe, votre nationalité, vos origines, votre nom).<o:p></o:p></p>

<p class="MsoNormal" style="text-align:justify"><b><span style="color:red">Pour les Staffeurs Recruteurs&nbsp;:<o:p></o:p></span></b></p>

<p class="MsoNormal" style="text-align:justify">Nous nous engageons dans la lutte
contre la non-discrimination en favorisant le recrutement par les compétences
et les qualités humaines des candidats.<o:p></o:p></p>

<p class="MsoNormal" style="text-align:justify">Nous nous engageons à ne travailler
qu’avec des organisations qui ont un réel sens éthique et qui proposent un
environnement de travail satisfaisant et en accord avec la présente charte.<o:p></o:p></p>

<p class="MsoNormal" style="text-align:justify"><o:p>&nbsp;</o:p></p>

<p class="MsoNormal" style="text-align:justify"><b><u>A savoir</u></b>&nbsp;: Nous nous engageons à désinscrire tous les <span style="color:#0070C0">Staffeurs Workers </span>et <span style="color:red">Staffeurs
Recruteurs </span>qui ne respecteraient pas cette charte éthique.<o:p></o:p></p>

<p class="MsoNormal" style="text-align:justify"><o:p>&nbsp;</o:p></p>

<p class="MsoNormal" style="text-align:justify"><b>VOS ENGAGEMENTS&nbsp;:<o:p></o:p></b></p>

<p class="MsoNormal" style="text-align:justify"><b><span style="color:#0070C0">Engagements des Staffeurs Workers&nbsp;:<o:p></o:p></span></b></p>

<p class="MsoNormal" style="text-align:justify">Une fois inscrit et par la même
occasion, devenu un <span style="color:#0070C0">Staffeur Worker</span>, vous
vous engagez à&nbsp;:<o:p></o:p></p>

<p class="MsoListParagraphCxSpFirst" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Indiquer de vraies informations sur votre
personne (nom, prénom, date de naissance, nationalité),<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Indiquer de vraies informations concernant la
validité de votre carte nationale d’identité ou titre de séjour (avec la
mention autorisation à travailler),<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Accepter que l’on fasse systématiquement un
contrôle de référence concernant vos expériences professionnelles,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->A mettre à jour régulièrement vos disponibilités
réelles,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->A mettre à jour votre CV après chaque mission
réalisée,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->De noter les organisations dans lesquelles vous
avez travaillé après chaque mission (choisir une étoile entre 1 et 5),<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Faire un témoignage sur STAFF EMPLOI si l’on
vous le demande,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->De partager votre expérience avec les autres
Staffeurs si l’on vous le demande,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->A nous informer par courriel chaque mission
acceptée sur la plateforme,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->A accepter une mission sur laquelle vous vous
êtes proposé en tant qu’&nbsp;«&nbsp;intéressé et donc disponible&nbsp;»,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->D’accepter les entretiens Skype si
l’organisation le suggère,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->A rapporter vos documents administratifs lors de
votre mission pour la création de votre contrat de travail par l’organisation
(carte d’identité ou titre de séjour en cours de validité «&nbsp;avec la
mention autorisé à travailler&nbsp;», vos diplômes, votre carte vitale, votre
attestation de sécurité sociale, une attestation de domicile à votre nom, un
RIB, votre permis de conduire si vous en êtes détenteur),<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->A nous informer si l’organisation vous contacte
en direct pour vous faire une proposition d’emploi,<o:p></o:p></p>

<p class="MsoListParagraphCxSpLast" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->A nous informer s’il y a un changement de
contrat entre vous et l’organisation.<o:p></o:p></p>

<p class="MsoNormal" style="text-align:justify"><o:p>&nbsp;</o:p></p>

<p class="MsoNormal" style="text-align:justify"><b><span style="color:red">Engagements des Staffeurs Recruteurs&nbsp;:<o:p></o:p></span></b></p>

<p class="MsoListParagraphCxSpFirst" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Indiquer de vraies informations sur votre
organisation (raison sociale, secteur d’activité, numéro de SIRET/
Immatriculation, adresse postale, coordonnées, présentation de l’organisation),<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Indiquer de vraies informations sur la personne
en charge des recrutements (nom, prénom, fonction, contact),<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Indiquer la disponibilité réelle de la prise de
poste du besoin de personnel (vacation, CDD, CDI ou Freelance),<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Accepter que l’on fasse un contrôle sur
l’existence de l’organisation,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->D’accueillir les <span style="color:#0070C0">Saffeurs
Workers </span>choisis,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Rémunérer les <span style="color:#0070C0">Staffeurs
Workers </span>ayant travaillé au sein de votre organisation,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Noter les <span style="color:#0070C0">Staffeurs
Workers </span>ayant travaillé au sein de votre organisation après chaque
mission (choisir un cœur entre 1 et 5),<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Faire un témoignage sur STAFF EMPLOI si l’on
vous le demande,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->Partager vos expériences en tant qu’organisation
au sein de la plateforme si l’on vous le demande,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->A nous informer de la venue des <span style="color:#0070C0">Staffeurs Workers </span>que vous aurez choisis,<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->A nous informer s’il y a eu transformation
(acceptation de vacation, CDD, CDI ou Freelance),<o:p></o:p></p>

<p class="MsoListParagraphCxSpMiddle" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->A payer le montant de vos recrutements,<o:p></o:p></p>

<p class="MsoListParagraphCxSpLast" style="text-align:justify;text-indent:-18.0pt;
mso-list:l0 level1 lfo1"><!--[if !supportLists]-->-<span style="font-stretch: normal; font-size: 7pt; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><!--[endif]-->A ne pas contacter en direct les<span style="color:#0070C0"> Staffeurs Workers </span>qui ont déjà travaillé pour
votre organisation sans nous le signaler.<o:p></o:p></p>

<p class="MsoNormal" style="text-align:justify"><o:p>&nbsp;</o:p></p>

<p class="MsoNormal" style="text-align:justify">Parce que nous croyons en l’être
humain, nous pensons qu’il est digne de confiance. Nous vous demandons donc
d’accepter de respecter cette charte éthique afin de valider votre inscription
et devenir un <b>Staffeur</b> à part
entier&nbsp;<span style="font-family:Wingdings;mso-ascii-font-family:Calibri;
mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
minor-latin;mso-char-type:symbol;mso-symbol-font-family:Wingdings">J</span><o:p></o:p></p>

<p class="MsoNormal" style="text-align:justify"><o:p>&nbsp;</o:p></p>

<p class="MsoNormal" style="text-align:justify"><o:p>&nbsp;</o:p></p>
                <button class="btn btn-success btn-lg pull-right" name="envoyer" type="submit">En cliquant sur ce bouton j'accepte la charte éthique du site</button>
            </div>
        </div>
    </div>
</form>
</div>

<br />
<?php
if(isset($erreur)){echo $erreur;}
 ?>

</body>
<?php include("footer.html"); ?>
<script src="inscription.js"></script>
