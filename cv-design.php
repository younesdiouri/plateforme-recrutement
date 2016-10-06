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

<script src="cv-design.js"></script>
<link href="cv-design.css" rel="stylesheet"/>
<title>Accueil membre</title></head>
 <script>

 </script>
<br />
<br />
<div class="container">
    
          <div class="panel panel-primary">
            <div class="panel-heading">
				<h3 class="panel-title">
				<?php
				$Requete='select id_worker from worker,worker_cv where worker.id=worker_cv.id_worker and login="'.$_SESSION["login"].'"';
				$Resultat=mysql_query($Requete);
				if($Resultat)
				{
					$test=mysql_fetch_assoc($Resultat);
				$up=$test["id_worker"];	
				
				}
				?>
				<?php if(isset($up)){echo 'Modifier';}else{echo 'Completer';}?> votre CV : (saisir à la main)
				
				</h3>
			</div>

    <div class="form-area">  
        <form role="form" id="form-call" method="POST" action="#scrolldown">
					<?php
					
					$req="select id,nom,prenom,mail,date_naissance,telephone,adresse,cp from worker where login='".$_SESSION["login"]."'";
					$query=mysql_query($req);
					$data=mysql_fetch_assoc($query);
					$idworker=$data["id"];
					if(!$query) {echo mysql_error().'<br />'.$req;}
					
					
					
                    echo '<h3 style="margin-bottom: 100px; text-align: center;">'.$data["prenom"].' '.$data["nom"].'</h3>';
 
echo '<p style="text-align: left;">'.$data["mail"].'</p>';
echo '<p style="text-align: right;">'.$data["date_naissance"].'</p>';
echo '<p style="text-align: left;">'.$data["telephone"].'</p>';
echo '<p style="text-align: right;">'.$data["adresse"].'  '.$data["cp"].'</p>';
?>
<br />
<table width="872" border="1">
<tbody>
<tr>
<td width="872">
<p style="text-align: center;"><strong>Comp&eacute;tences</strong></p>
</td>
</tr>
</tbody>
</table>
<br />
<p><textarea name="competences" id="description" rows="10" cols="122"></textarea></p>
<br /><br />
<table width="872" border="1">
<tbody>
<tr>
<td width="872">
<p style="text-align: center;"><strong>Exp&eacute;riences Professionnelles</strong></p>
</td>
</tr>
</tbody>
</table>
<br />
<p><textarea name="experiences" id="description" rows="10" cols="122"></textarea></p>
<br /><br />
<table width="872" border="1">
<tbody>
<tr style="height: 31px;">
<td style="height: 31px;" width="872">
<p style="text-align: center;"><strong>Formation</strong></p>
</td>
</tr>
</tbody>
</table>
<br />
<p><textarea name="formations" id="description" rows="10" cols="122"></textarea></p>
<br /><br />
<table width="872" border="1">
<tbody>
<tr style="height: 31px;">
<td style="height: 31px;" width="872">
<p style="text-align: center;"><strong>Langues</strong></p>
</td>
</tr>
</tbody>
</table>
<br />
<p><textarea name="langues" id="description" rows="10" cols="122"></textarea></p>
<br /><br />
<table width="872" border="1">
<tbody>
<tr style="height: 31px;">
<td style="height: 31px;" width="872">
<p style="text-align: center;"><strong>Centres d'Int&eacute;r&ecirc;ts</strong></p>
</td>
</tr>
</tbody>
</table>
<br />
<p><textarea name="centres_interets" id="description" rows="10" cols="122"></textarea></p>

        <input type="submit" id="submit-scroll" name="submit" value="envoyer" class="btn btn-primary pull-right" />
        </form>
    </div>
</div>

			
 <?php 
 if(isset($_POST["submit"]))
 {
	 
	 $competences=htmlspecialchars($_POST["competences"],ENT_QUOTES);
	 $experiences=htmlspecialchars($_POST["experiences"],ENT_QUOTES);
	 $langues=htmlspecialchars($_POST["langues"],ENT_QUOTES);
	 $interets=htmlspecialchars($_POST["centres_interets"],ENT_QUOTES);
	 $formations=htmlspecialchars($_POST["formations"],ENT_QUOTES);
	 if(isset($up))
	 {
	 $req="update worker_cv set competences='$competences',mission='$experiences',formation='$formations',langue='$langues',centre_interet='$interets' 
	 where id_worker=".$up."";
	
	 }
	 else
	 {
	 $req="insert into worker_cv (competences,mission,formation,langue,centre_interet,id_worker) VALUES 
	 ('$competences','$experiences','$formations','$langues','$interets','$idworker')";
	 }
	 $query=mysql_query($req);
	
	 if(!$query) {
		 echo '"<br /><div class="alert alert-danger fade in" role="alert" id="scrolldown"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Attention!</strong>Un problème est survenu lors de la création de votre CV</div>';
	echo mysql_error()."<br />".$req;
	 }
	else
	{
		echo '<br /><div class="alert alert-success fade in" role="alert" id="scrolldown"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Merci!</strong>Votre CV a bien été mis à jour</div>';
	}
	 
	 echo'</div>';
	 
 }
 ?>
 