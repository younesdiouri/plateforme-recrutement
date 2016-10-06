
<?php
include("headeradmin.php");
  
include("config.php");
$req = "select * from message";
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
			<div class="col-lg-5">

<h1>Liste des messages </h1>
<div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr><th>Titre</th><th>Date</th><th>Descriptif</th><th>Supprimer</th></tr>
									</thead>
									<tbody>
<?php									
while($ligne)
{
	echo "<tr><td>".$ligne["titre"]."</td><td>".$ligne["date"]."</td><td>".$ligne["descriptif"]."</td><td class='text-center'><a  class=\"btn btn-danger btn-xs\" href='delete-message.php?num=".$ligne["id"]."' 
											onclick=\"return confirm('Êtes-vous certain de vouloir effacer définitivement ce message ?')\">
											<span class=\"glyphicon glyphicon-remove\"></span>Suppr</a></td></tr>";
											$ligne = mysql_fetch_assoc($resultat);

}

?>
</tbody>
</table><br /><br /><br />
<h2>Ajouter un message</h2>
<center><hr width="60%" border="2" style="border-color:red;" /></center>
<form action="admin-message.php" method="post">
<div class="form-group">
    <label for="InputName">Titre</label><input type="text" class="form-control" name="titre">
</div>
<div class="form-group">	
<label for="InputName">Date:</label><input type="text" class="form-control" name="date">
</div>
<div class="form-group">
<label for="InputName">Descriptif:</label><br /><textarea name="descriptif" rows="5" cols="50"></textarea>
</div>

<div class="form-group">
<button type="submit" name="ajouter" class="btn btn-md btn-warning">Ajouter</button>
</div></form>
<center><hr width="60%" border="2" style="border-color:red;" /></center>

<?php
if(isset($_POST["ajouter"]))
{
	$titre=$_POST["titre"];
	$date=$_POST["date"];
	$descriptif=$_POST["descriptif"];
	$Req_add="insert into message (titre,descriptif,date) values ('$titre','$descriptif','$date')";
	$Query_add=mysql_query($Req_add);
}
 ?>
 <br />
 <br />
 <br />