<?php
include("headeradmin.php");
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

<h1>Ajouter un ambassadeur </h1>
			<form method="post" action="add-ambassadeur-exe.php">
  <div class="form-group">
    <label for="exampleInputName2">Nom de l'ambassadeur</label>
    <input type="text" class="form-control" name="nom" id="exampleInputName2" required>
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Prenom de l'ambassadeur</label>
    <input type="text" class="form-control" name="prenom" id="exampleInputName2" required>
  </div>
    <div class="form-group">
    <label for="InputName">Email</label>
    <input type="text" class="form-control" name="mail" id="InputName" required>
  </div>
  <div class="form-group">
    <label for="InputName">Identifiant</label>
    <input type="text" class="form-control" name="login" id="InputName" required>
  </div>
     <div class="form-group">
    <label for="InputName">Mot de passe</label>
    <input type="text" class="form-control" name="password" id="InputName" required>
  </div>
  
  </div>
  </div>
  <button type="add-entreprise-exe.php" name="envoyer" class="btn btn-primary btn-lg">Ajouter</button>
</form>
<?php
if(isset($erreur))
{
	echo "<div class=\"alert alert-danger fade in\" role=\"alert\" id=\"scrolldown\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
	L'ambassadeur n'a pas été ajouté.";
}
if(isset($success))
{
	echo "<div class=\"alert alert-success fade in\" role=\"alert\" id=\"scrolldown\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
	L'ambassadeur a été ajouté.";
}
 ?>



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

</html>
