
<?php
include("headeradmin.php");
$num=$_GET["num"];   
include("config.php");
$req = "select * from worker where id=$num";
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

<h1>Modifier un worker </h1>
<form action="update-worker-exe.php" method="post">
<div class="form-group">
    <label for="InputName">ID</label><input type="hidden" name="id" value="<?php echo $ligne["id"];?>">
</div>
<div class="form-group">	
<label for="InputName">Nom:</label><input type="text" class="form-control" name="nom" value="<?php echo $ligne["nom"];?>">
</div>
<div class="form-group">
<label for="InputName">Prenom:</label><input type="text" name="prenom" class="form-control" value="<?php echo $ligne["prenom"];?>">
</div>
<div class="form-group">
<label for="InputName">Ville:</label><input type="text" name="ville" class="form-control" value="<?php echo $ligne["ville"];?>">
</div>
<div class="form-group">
<label for="InputName">E-mail:</label><input type="text" name="mail" class="form-control" value="<?php echo $ligne["mail"];?>">
</div>
<div class="form-group">
<label for="InputName">Adresse:</label><input type="text" name="adresse" class="form-control" value="<?php echo $ligne["adresse"];?>">
</div>
<div class="form-group">
<label for="InputName">Telephone:</label><input type="text" name="telephone" class="form-control" value="<?php echo $ligne["telephone"];?>">
</div>
<div class="form-group">
<label for="InputName">Code Postal:</label><input type="text" name="cp" class="form-control" value="<?php echo $ligne["cp"];?>">
</div>
<div class="form-group">
<label for="InputName">Metier:</label><input type="text" name="metier" class="form-control" value="<?php echo $ligne["metier"];?>">
</div>
<div class="form-group">
<label for="InputName">Date de naissance:</label><input type="text" name="date_naissance" class="form-control" value="<?php echo $ligne["date_naissance"];?>">
</div>
<div class="form-group">
<label for="InputName">Login:</label><input type="text" name="login" class="form-control" value="<?php echo $ligne["login"];?>" disabled>
</div><div class="form-group">
<label for="InputName">Mot de Passe:</label><input type="text" name="password" class="form-control" value="<?php echo $ligne["password"];?>" disabled>
</div><div class="form-group">
<button type="submit" name="modifier" class="btn btn-lg btn-primary">Modifier</button>
</div>
</div>
</form>

<!-- jQuery -->
    <script src="admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="admin/bower_components/raphael/raphael-min.js"></script>
    <script src="admin/bower_components/morrisjs/morris.min.js"></script>
   

	    <!-- DataTables JavaScript -->
    <script src="admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="admin/dist/js/sb-admin-2.js"></script>
</body>