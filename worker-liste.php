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
<link rel="stylesheet" href="worker-liste.css">
<script src="worker-liste.js"></script>
<?php include("simple-nav.php"); ?>
<br /><br />
<title>Workers</title>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="staff-img/staff-caroussel.png" width="100%" alt="First slide">
                        <div class="carousel-caption">
                            <h3>
                                Votre CV en ligne</h3>
                            <p>
                                Simple d'utilisation</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="staff-img/staff-caroussel2.png" width="100%" alt="Second slide">
                        <div class="carousel-caption">
                            <h3>
                                Echangez avec les recruteurs</h3>
                            <p>
                                Un profil visible pour les organisations</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="staff-img/caroussel3.jpg" width="100%" alt="Third slide">
                        <div class="carousel-caption">
                            <h3>
                                L'équipe Staff-Emploi</h3>
                            <p>
                                Dynamique, active et expérimentée</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>
            <div class="main-text hidden-xs">
                <div class="col-md-12 text-center">
				<div class="car-col">
                    <h1>
                        Staff-Emploi</h1>
                    <h3>
                        Workers et Recruteurs sur la même plateforme
                    </h3>
                    <div class="">
                        <a class="btn btn-clear btn-sm btn-min-block" href="accueil-inscription.php">Connexion</a>
						
						<a class="btn btn-clear btn-sm btn-min-block"
                            href="accueil-inscription.php">Inscription</a></div>
                </div>
				</div>
            </div>
        </div>
    </div>
</div>
<div id="push">
</div>
<br /><br />

<div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title">Les Workers</span>
					
                    <ul class="pull-right c-controls">
                   
                        
                        <li><a href="#" class="hide-search" data-command="toggle-search" data-toggle="tooltip" data-placement="top" title="Barre de Recherche"><i class="fa fa-ellipsis-v"></i></a></li>
                    </ul>
                </div>
                
                <div class="row" style="display: none;">
                    <div class="col-xs-12">
                        <div class="input-group c-search">
                            <input type="text" class="form-control" id="contact-list-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                        </div>
                    </div>
                </div>
                
                <ul class="list-group" id="contact-list">
                    <?php 
					$req="select worker.id AS idwork,worker.prenom AS prenom,worker.nom AS nom,worker.ville AS ville,worker.metier AS metier,
						worker_cv.competences AS cpt,worker_cv.mission AS expro,worker_cv.formation AS frm,worker_cv.langue AS langue,worker_cv.centre_interet AS interet 
						FROM worker,worker_cv 
						WHERE worker.id=worker_cv.id_worker";
						
						$query=mysql_query($req);
						if(!$query)
						{
							echo mysql_error()."<br />" .$query."<br />";
						}
						
						$data=mysql_fetch_assoc($query);
						while($data)
						{
					
					
							echo '<li class="list-group-item">';
							echo '<div class="col-xs-12 col-sm-3">';
                            echo '<img src="noavatar.png" alt="staff-emploi" class="img-responsive img-circle" />';
                        
							echo '</div>';
							echo '<div class="col-xs-12 col-sm-9 ">';
							
							echo '<span class="name">'. ($data["metier"]).'</span><br/>
							<span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="'. ($data["ville"]).'"></span>
							<span class="visible-xs"> <span class="text-muted">'. ($data["ville"]).'</span><br/></span>
							<span class="glyphicon glyphicon-eye-open text-muted c-info" data-toggle="tooltip" title="0 Vues"></span>
							<span class="visible-xs"> <span class="text-muted">0 Vues</span><br/></span>
							<span class="glyphicon glyphicon-shopping-cart text-muted c-info" data-toggle="tooltip" title="'. ($data["metier"]).'"></span>
							<span class="visible-xs"> <span class="text-muted">'. ($data["metier"]).'</span><br/></span>';
							echo '<a href="#curriculum-modal" data-toggle="modal" data-visualcv="';
											
											
							$cpt='';
							$frm='';
							$exp='';
							$langue='';
							$interet='';
							$cpt.=''.$data["cpt"];
							$frm.=''.$data["frm"];
							$exp.=''.$data["expro"];
							$langue.=''.$data["langue"];
							$interet.=''.$data["interet"];
							echo $cpt.'@@@'.$frm.'@@@'.$exp.'@@@'.$langue.'@@@'.$interet; 
											
							echo '">';
							echo '<span class="fa fa-comments text-muted c-info text-muted c-info" data-toggle="tooltip" title="CV"></span></a>';
							echo '</div>';
							echo '<div class="clearfix"></div>';
							echo '</li>';
							$data=mysql_fetch_assoc($query);
						}
                    ?>
                </ul>
            </div>
			
	
    
    <div id="curriculum-modal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><?php echo  ('×')?></button>
                    <h4 class="modal-title" id="mySmallModalLabel">Curriculum Vitae :</h4>
                </div>
                <div class="modal-body">
                    <center><p><strong>Compétences :</strong><br /> <textarea name="competences" value="" rows="10" cols="80" disabled></textarea></p></center>
					<br/>
                   <center> <p><strong>Formation:</strong><br /><textarea name="formation" value="" rows="10" cols="80" disabled></textarea></p></center>
					<br />
					<center><p><strong>Expériences Professionnelles:</strong><br /><textarea name="experiences" value="" rows="10" cols="80" disabled></textarea></p></center>
					<br />
					<center><p><strong>Langues:</strong><br /><textarea name="langues" value="" rows="10" cols="80" disabled></textarea></p></center>
					<br />
					<center><p><strong> Centres d'intérêts:</strong><br /><textarea name="interets" value="" rows="10" cols="80" disabled></textarea></p></center>
					
					<br />
                </div>
				
            </div>
        </div>
    </div>
    </div>
<div class="col-md-8">

    <div class="panel panel-default">
                <div class="panel-heading c-list">
                   
					
        <span class="title">Actualités</span>
        <p></p></div>
		</div>
    
   <div class="secondc">
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                        <li class="col-sm-3">	
							<div class="fff">
								<div class="thumbnail">
									<img src="staff-img/facebook-logo.png" alt="">
								</div>
								<div class="caption">
									<h4>Notre page Facebook</h4>
									<p>Nouveaux articles publiés</p>
									<a class="btn btn-mini" href="https://www.facebook.com/Staff-Emploi-456179331206039/">En savoir plus</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<img src="staff-img/twitter-logo.png" alt="">
								</div>
								<div class="caption">
									<h4>Nos Tweets</h4>
									<p>Venez tweeter avec nous.</p>
									<a class="btn btn-mini" href="https://twitter.com/staffemploi">En savoir plus</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<img src="staff-img/linkedin-logo.jpg" alt="">
								</div>
								<div class="caption">
									<h4>Linkedin</h4>
									<p>Réseau professionnel</p>
									<a class="btn btn-mini" href="https://www.linkedin.com/company/staff-emploi">En savoir plus</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="http://fr.viadeo.com/fr/company/staff-emploi1"><img src="staff-img/viadeo-logo.jpg" alt=""></a>
								</div>
								<div class="caption">
									<h4>Viadeo</h4>
									<p>Réseau Professionnel d'entreprises</p>
									<a class="btn btn-mini" href="contact.php">En savoir plus</a>
								</div>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide1 --> 
            
            <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-3">	
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="staff-img/staff-logo.png" alt=""></a>
								</div>
								<div class="caption">
									<h4>Annonce Entreprises</h4>
									<p>Nouvelles annonces en ligne</p>
									<a class="btn btn-mini" href="entreprises-liste.php">En savoir plus</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="staff-img/staff-logo.png" alt=""></a>
								</div>
								<div class="caption">
									<h4>Les nouveaux Workers inscrits</h4>
									<p>Bienvenue à nos nouveaux workers</p>
									<a class="btn btn-mini" href="#">En savoir plus</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="staff-img/staff-logo.png" alt=""></a>
								</div>
								<div class="caption">
									<h4>Les news du Staff</h4>
									<p>Le message du jour</p>
									<a class="btn btn-mini" href="article.php">En savoir plus</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="staff-img/staff-logo.png" alt=""></a>
								</div>
								<div class="caption">
									<h4>Nouveautés du site</h4>
									<p>Planning disponibilités</p>
									<a class="btn btn-mini" href="#">En savoir plus</a>
								</div>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide3 --> 
        </div>
        
       
	   <nav>
			<ul class="control-box pager">
				<li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
				<li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
			</ul>
		</nav>
	   <!-- /.control-box -->   
                              
    </div><!-- /#myCarousel -->
        
</div><!-- /.col-xs-12 -->  

    <!-- JavaScrip Search Plugin -->
    <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
    
</div>
</div>
</body>

<?php include("footer.html");?>