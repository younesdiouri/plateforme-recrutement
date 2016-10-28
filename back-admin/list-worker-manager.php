<?php 
include("manager-nav.php");	?>

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
                            Les Workers en détail:
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr><th> Nom </th><th> Prénom </th><th> Téléphone </th><th> Adresse </th><th> Ville </th><th> Cp </th> <th>Email</th><th>Metier</th></tr>
									</thead>
									<tbody>
									<?php
include("config.php");
$req = "select * from worker order by nom";
$resultat = mysql_query($req);
if(!$resultat) echo mysql_error();
$ligne = mysql_fetch_assoc($resultat);

while($ligne)
{
	echo "<tr><td>".$ligne["nom"]."</td><td>".$ligne["prenom"]."</td><td> ".$ligne["telephone"]."</td><td> ".$ligne["adresse"]."</td>
	<td> ".$ligne["ville"]."</td><td> ".$ligne["cp"]."</td><td> ".$ligne["mail"]."</td><td>".$ligne["metier"].
	"</td></tr>";
	$ligne = mysql_fetch_assoc($resultat);

}

?>
</tbody>
</table><script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
<br /><br /><br /><br />
<a href="dispo.php"><input type="button" class="btn btn-lg btn-primary" name="disponibilite" value="Ajouter une disponibilité"/></a>