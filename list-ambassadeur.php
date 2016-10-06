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
                            Vos contacts ambassadeurs:
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr><th> Nom </th><th> Prenom </th><th>Email</th><th> Nombre de Workers</th><th> Identifiant</th><th> Mot de Passe </th><th>Modifier</th><th>Supprimer</th></tr>
									</thead>
									<tbody>
									<?php
include("config.php");

$req = "select * from manager order by nom";
$resultat = mysql_query($req);
if(!$resultat) echo mysql_error();
$ligne = mysql_fetch_assoc($resultat);

while($ligne)
{
	echo "<tr><td>".$ligne["nom"]."</td><td>".$ligne["prenom"]."</td><td> ".$ligne["mail"]."</td><td> ".$ligne["nb_worker"]."</td>
	<td> ".$ligne["login"]."</td><td> ".$ligne["password"]."</td><td class='text-center'><a class='btn btn-info btn-xs' href='update-ambassadeur.php?num=".$ligne["id"]."'>
											<span class=\"glyphicon glyphicon-edit\"></span>Editer</a></td>
											<td class='text-center'><a  class=\"btn btn-danger btn-xs\" href='delete-ambassadeur.php?num=".$ligne["id"]."' 
											onclick=\"return confirm('Êtes-vous certain de vouloir effacer définitivement cette entrée ?')\">
											<span class=\"glyphicon glyphicon-remove\"></span>Suppr</a></td></tr>";
	$ligne = mysql_fetch_assoc($resultat);

}

?>
</tbody>
</table>
</body>
</html>