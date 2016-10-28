<!DOCTYPE html>
<?php
//@DY@security
// On prolonge la session
session_start();
include("config.php");
$req='select count(*) from manager where login="'.$_SESSION["login"].'"';
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

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Staff-emploi</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Ambassadeur</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Messages de vos workers</strong>
                                    <span class="pull-right text-muted">
                                        <em>Date</em>
                                    </span>
                                </div>
                                <div></div>
                            </a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Lire tout les messages (construction)</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Profil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Se Déconnecter</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Recherche">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="manager.php"><i class="fa fa-dashboard fa-fw"></i>Acceuil</a>
                        </li>
						  <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Workers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							<li>
                                    <a href="list-worker-manager.php">Liste des workers</a>
                                </li>
								
                                <li>
                                    <a href="add-worker-manager.php">Ajouter un worker</a>
                                </li>
                                <li>
                                    <a href="#">Disponibilités Workers<span class="fa arrow"></span></a>
                               
                           
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="dispo.php">Ajouter une disponibilité</a>
                                        </li>
                                        <li>
                                            <a href="see-dispo.php">Afficher les disponibilités</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
								
                            
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Entreprises<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                                <li>
                                    <a href="list-entreprise.php">Liste des entreprises</a>
                                </li>
                                
								<li>
                                    <a href="add-entreprise.php">Ajouter une entreprise</a>
                                </li>
                            
                            </ul>  
                       
                        </li>
						 <li>
                            <a href="stats.php"><i class="fa fa-star-o fa-fw"></i>Ambassadeurs<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                                <li>
                                    <a href="add-ambassadeur.php">Créer un ambassadeur</a>
                                </li>
                        
								<li>
                                    <a href="list-ambassadeur.php">Liste des ambassadeurs</a>
                                </li>
                            
                            </ul>  
						
                        </li>
                      <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Event<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin-message.php">Message</a>
                                </li>
                                
								<li>
                                    <a href="admin-contact.php">Contacts</a>
                                </li>
                            
                            </ul>  
                       
                        </li>  
                    </ul>
					
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		<script src="admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin/dist/js/sb-admin-2.js"></script>
