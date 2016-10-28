<!DOCTYPE HTML>
<html>

<head>
		<meta charset="utf-8" />
	<link href="article.css" rel="stylesheet">

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
</head>
<title>Les articles </title>
<?php
include("simple-nav.php");
 ?>
 <div class="container">
	<div class="jumbotron">
	<center><h1>Offres d'emploi du jour</h1>
	</div>
<div class="container">
<?php
		include("config.php");
		$req= "select * from article";
		$query=mysql_query($req);
		$ligne=mysql_fetch_assoc($query);
		while($ligne)
		{
			
		
			?>
			
    <div class="panel panel-default">
        <div class="panel-heading">
		
            <a href="#" class="MakaleYazariAdi"><?php echo date("F j, Y"); ?></a>
            <div class="btn-group" style="float:right;">
            	<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            		<span class="glyphicon glyphicon-cog"></span>
            		<span class="sr-only">Toggle Dropdown</span>
            	</button>
            	<!--<ul class="dropdown-menu">
            		<li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Modifier</a></li>
            		<li role="separator" class="divider"></li>
            		<li><a href="#"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Supprimer</a></li>
            	</ul>-->
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="media">
                <div class="media-left">
                    
                        <img class="media-object" src="<?php echo "worker-file/".$ligne["id"].".jpg"; ?>" alt="Kurt">
                    
                </div>
                <div class="media-body">
                <h4 class="media-heading"><?php echo $ligne["titre"]; ?></h4>
				<?php echo $ligne["description"]; ?>
                <div class="clearfix"></div>
                <div class="btn-group" role="group" id="BegeniButonlari">
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-down"></span></button>
                </div>                 
               </div>
            </div>
        </div>
    </div>
	<?php 
		$ligne=mysql_fetch_assoc($query);}
	?>
</div>