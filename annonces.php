<!DOCTYPE HTML>
<html>
<?php include("config.php");
?>
<head> <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link href="http://getbootstrap.com/examples/theme/theme.css" rel="stylesheet"/>
  <link href="annonces.css" rel="stylesheet"/>
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<script src="annonces.js"></script>
<?php include("simple-nav.php"); ?>
<br /><br />
<title>Annonces</title>

<body>
<div class="container">
				<div class="pull-right"><a href="add-annonce.php"><button class="btn btn-lg btn-primary" type="button">Ajoutez votre annonce</button></a></div><br /><br />
                 <h1>Les Annonces</h1>  
               <h3>         
             <li><a href="#" class="hide-search" data-command="toggle-search" data-toggle="tooltip" data-placement="top" title="Barre de Recherche"><i class="glyphicon glyphicon-search"></i>Recherche</a></li>
                    </h3>
                
                
                <div class="row" style="display: none;">
                    <div class="col-xs-12">
                        <div class="input-group c-search">
                            <input type="text" class="form-control" id="contact-list-search" placeholder="Saisir vos mots-clé, par exemple : babysitting, dates, temps partiel">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                        </div>
                    </div>
                </div>
				
				<?php 
				$req="select * from annonce";
				$query=mysql_query($req);
				$data=mysql_fetch_assoc($query);
				
				?>
				
    <hgroup class="mb20">
		<br /><br />
		<h2 class="lead"><strong class="text-danger">Toutes</strong> les petites annonces sur <strong class="text-primary">Staff-Emploi</strong></h2>								
	</hgroup>
		<ul class="list-group" id="contact-list">
    <section class="col-xs-12 col-sm-6 col-md-12">
<?php 
while($data)
{
	?>
		<article class="search-result row">
		
		<li>
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="annonce" class="thumbnail"><img src="staff-img/annonces.jpg" alt="annonce" /></a>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<br /><i class="glyphicon glyphicon-calendar"></i> <span><?php echo $data["date"]; ?></span><br />
					<i class="glyphicon glyphicon-home"></i> <span><?php echo $data["ville"]; ?></span><br />
					<i class="glyphicon glyphicon-tags"></i> <span><?php echo $data["categorie"]; ?></span><br />
				</ul>
			</div>
			
			
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				<h3><a href="#" title=""><?php echo $data["titre"]; ?></a></h3>
				<p><?php echo $data["corps"]; ?></p>						
                <span class="plus"><a href="accueil-inscription.php" title="en savoir plus"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
			</li>
		</article>

<?php $data=mysql_fetch_assoc($query);} ?>
        			

	</section>
	</ul>
</div>
<!-- JavaScrip Search Plugin -->
    <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>