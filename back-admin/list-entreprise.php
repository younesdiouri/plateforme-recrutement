<?php 
include("headeradmin.php");	?>

 <div id="page-wrapper">
            
           
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bonjour!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Vos contacts entreprise:
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr><th> Entreprise</th><th>Siret</th><th> Ville </th><th> Secteur d'activité</th><th> Adresse </th><th> Code postal </th><th> Site Web </th> 
									<th>Nom et prénom Contact</th><th>E-mail</th><th>Téléphone</th><th>Modifier</th><th>Supprimer</th></tr>
									</thead>
									<tbody>
									<?php
include("config.php");

$req = "select * from entreprise order by nom";
$resultat = mysql_query($req);
if(!$resultat) echo mysql_error();
$ligne = mysql_fetch_assoc($resultat);

while($ligne)
{
	echo "<tr><td>".$ligne["nom"]."</td><td>".$ligne["siret"]."</td><td>".$ligne["ville"]."</td><td> ".$ligne["secteur_activite"]."</td><td> ".$ligne["adresse"]."</td>
	<td> ".$ligne["cp"]."</td><td> ".$ligne["siteweb"]."</td><td> ".$ligne["contact_nom"]." ".$ligne["contact_prenom"]."</td><td>
	".$ligne["contact_email"]."</td><td>".$ligne["contact_telephone"].
	"</td><td class='text-center'><a class='btn btn-info btn-xs' href='update-entreprise.php?num=".$ligne["id"]."'>
											<span class=\"glyphicon glyphicon-edit\"></span>Editer</a></td>
											<td class='text-center'><a  class=\"btn btn-danger btn-xs\" href='delete-entreprise.php?num=".$ligne["id"]."' 
											onclick=\"return confirm('Êtes-vous certain de vouloir effacer définitivement cette entrée ?')\">
											<span class=\"glyphicon glyphicon-remove\"></span>Suppr</a></td></tr>";
	$ligne = mysql_fetch_assoc($resultat);

}

?>
</tbody>
</table>
</body>
</html>