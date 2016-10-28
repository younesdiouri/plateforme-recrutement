
<?php
include("headeradmin.php");
  
include("config.php");
$req = "select * from contact";
$resultat = mysql_query($req);
$ligne = mysql_fetch_assoc($resultat);

?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Staff emploi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-10">

<h1>Requêtes des visiteurs </h1>
<div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr><th>Nom</th><th>Mail</th><th>Objet</th><th>Date</th><th>Descriptif</th><th>Supprimer</th></tr>
									</thead>
									<tbody>
<?php									
while($ligne)
{
	echo "<tr><td>".$ligne["nom"]."</td><td>".$ligne["mail"]."</td><td>".$ligne["objet"]."</td><td>".$ligne["date"]."</td><td>".$ligne["descriptif"]."</td><td class='text-center'><a  class=\"btn btn-danger btn-xs\" href='delete-contact.php?num=".$ligne["id"]."' 
											onclick=\"return confirm('Êtes-vous certain de vouloir effacer définitivement cette requête ?')\">
											<span class=\"glyphicon glyphicon-remove\"></span>Suppr</a></td></tr>";
											$ligne = mysql_fetch_assoc($resultat);

}

?>
</tbody>
</table><br /><br /><br />