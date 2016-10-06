<?php 
	include("nav-entreprise.php");include("config.php");
	
//@DY@security
// On prolonge la session
session_start();

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

<title>Accueil entreprises</title></head>

<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-sm-5">
          <div class="panel panel-primary">
            <div class="panel-heading">
				<h3 class="panel-title">
				Votre tableau de bord
				</h3>
			
                
			
			</div>
            <div class="panel-body">
              Vos Informations : <br />
				<table class="table">
					<thead>
					<tr><th>Nom</th><th>Activité</th><th>Situation</th><th>Crédits</th></tr>
					</thead>
					<tbody>
					<tr>
					<?php 
					$req="select * from entreprise where login='".$_SESSION["login"]."'";
					$query=mysql_query($req);
					$data=mysql_fetch_assoc($query);
					$id="";
					while($data)
					{
						$id=$data["id"];
						echo "<tr><td>".$data["nom"]."</td><td>".$data["secteur_activite"]."</td><td>Titre Novice</td><td>".$data["credits"]." 0 Crd</td></tr>";
						$data=mysql_fetch_assoc($query);
						
					}
					?>
					</tbody>
				</table>
				<br />
            </div> <!-- fin div panel body -->
          </div> <!-- fin div panel  -->
		</div> <!-- fin div class-->
		
		
		<div class="col-md-3 col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
					<?php
   
					echo '<strong> Parrainer un ami recruteur</strong>';
					?> 
					</h3>
			
					<div class="panel-body">
					<br />
					
					<a href="#"/><img src="parrainage.png" /></a>
					<br />
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-2 col-md-3">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-4x"></i></div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php 
														echo "0";
														?></div>
                                    <div>Notifications worker</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><button data-toggle="modal" href="#tinfos" class="btn btn-warning">Détails</button>
														<div class="modal fade" id="tinfos">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">Liste des News</h4>
																	</div>
																	<div class="panel panel-default"><center>
																	<?php 
																	
																	echo	'Aucun(e) worker ne s\'est renseigné sur votre profil pour l\'instant.';
																	echo '<br />';
																	
																	
																	?>
																	</div></center>
																</div>
															</div>
														</div>
								</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
		<div class="col-md-2 col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php 
														$reqs="select count(id) from message";
														$querys=mysql_query($reqs);
														$lignes=mysql_fetch_row($querys);
														echo $lignes[0];
														?></div>
                                    <div>Nouveaux Messages!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><button data-toggle="modal" href="#minfos" class="btn btn-primary">Détails</button>
														<div class="modal fade" id="minfos">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">Liste des messages</h4>
																	</div>
																	<div class="panel panel-default"><center>
																	<?php 
																	echo '<br /><hr />';
																	$news="select * from message";
																	$newsquery=mysql_query($news);
																	$infos=mysql_fetch_assoc($newsquery);
																	echo '<div class="modal-body">';
																	
																	while($infos)
																	{
																		
																	echo	'<strong>'.$infos["titre"].'</strong>:'.$infos["descriptif"].'<br /><strong>Date :</strong>'.$infos["date"].'';
																	echo '<br /><hr />';
																	
																	
																	$infos=mysql_fetch_assoc($newsquery);
																	}
																	
																	?>
																	</div>
																	</div></center>
																</div>
															</div>
														</div>
								</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
        </div>
	</div>
	 

	<br />
	<br />
	<div class="row">
			
				<center>
				<Strong>Les News du Blog</strong><br/><br />
					<iframe width="100%" height="100%" src="https://staffemploi.wordpress.com"></iframe>
				</center>
				</div>
		</div>	
					
                    <!-- /.panel .chat-panel -->
    
                <!-- /.col-lg-4 -->
				
				
		
</div><!-- fin div ROW -->

	

<br />
<br />

</body>
<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<?php include("footer.html"); ?>
</html>
