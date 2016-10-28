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

<h1>Ajouter une entreprise </h1>
			<form method="post" action="add-entreprise-exe.php">
  <div class="form-group">
    <label for="exampleInputName2">Nom de l'entreprise</label>
    <input type="text" class="form-control" name="nom" id="exampleInputName2" required>
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Secteur d'activité</label>
    <input type="text" class="form-control" name="secteur_activite" id="exampleInputName2" required>
  </div>
    <div class="form-group">
    <label for="exampleInputName2">Ville</label>
    <input type="text" class="form-control" name="ville" id="exampleInputName2" required>
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Siret</label>
    <input type="text" class="form-control" name="siret" id="exampleInputName2" required>
  </div>
  <div class="form-group">
    <label for="InputName">Adresse</label>
    <input type="text" class="form-control" name="adresse" id="InputName" required>
  </div>
     <div class="form-group">
    <label for="InputName">Code Postal</label>
    <input type="text" class="form-control" name="cp" id="InputName" required>
  </div>
  <div class="form-group">
    <label for="InputName">Site@Web</label>
    <input type="text" class="form-control" name="siteweb" id="InputName" required>
  </div>
  <div class="form-group">
    <label for="InputName">Contact au sein de l'entreprise (Nom):</label>
    <input type="text" class="form-control" name="contact_nom" id="InputName" required>
  </div>
  <div class="form-group">
    <label for="InputName">Prénom du contact:</label>
    <input type="text" class="form-control" name="contact_prenom" id="InputName" required>
  </div>
  <div class="form-group">
    <label for="InputName">Téléphone du contact:</label>
    <input type="text" class="form-control" name="contact_telephone" id="InputName" required>
  </div>
  <div class="form-group">
    <label for="InputName">E-mail du contact:</label>
    <input type="text" class="form-control" name="contact_email" id="InputName" required>
  </div>
  <div class="form-group">
    <label for="InputName">Login:</label>
    <input type="text" class="form-control" name="login" id="InputName" required>
  </div>
  <div class="form-group">
    <label for="InputName">Mot de passe:</label>
    <input type="text" class="form-control" name="password" id="InputName" required>
  </div>
  </div>
  </div>
  <button type="add-entreprise-exe.php" name="envoyer" class="btn btn-primary btn-lg">Ajouter</button>
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

</html>
