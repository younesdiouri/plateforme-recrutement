
<?php
include("headeradmin.php");
$num=$_GET["num"];   
include("config.php");
$req = "select * from article where id=$num";
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

<h1>Modifier un article </h1>
<form action="update-article-exe.php" method="post">
<div class="form-group">
    <label for="InputName">ID</label><input type="hidden" name="id" value="<?php echo $ligne["id"];?>">
</div>
<div class="form-group">	
<label for="InputName">titre:</label><input type="text" class="form-control" name="titre" value="<?php echo $ligne["titre"];?>">
</div>
<div class="form-group">
<label for="InputName">date:</label><input type="text" name="date" class="form-control" value="<?php echo $ligne["date"];?>">
</div>
<div class="form-group">
<label for="InputName">description:</label><textarea name="description" class="form-control" value="<?php echo $ligne["description"];?>"></textarea>
</div>
<div class="form-group">
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