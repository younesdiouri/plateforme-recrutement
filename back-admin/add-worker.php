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

<h1>Ajouter un worker </h1>
			<form method="post" action="add-worker-exe.php">
  <div class="form-group">
    <label for="exampleInputName2">Nom</label>
    <input type="text" class="form-control" name="nom" id="exampleInputName2" required>
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Prenom</label>
    <input type="text" class="form-control" name="prenom" id="exampleInputName2" required>
  </div>
    <div class="form-group">
    <label for="exampleInputName2">Ville</label>
    <input type="text" class="form-control" name="ville" id="exampleInputName2" required>
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
    <label for="InputName">E-mail</label>
    <input type="text" class="form-control" name="mail" id="InputName" required>
  </div>
  <div class="form-group">
    <label for="InputName">Telephone</label>
    <input type="text" class="form-control" name="telephone" id="InputName" required>
  </div>
  <div class="form-group">
    <label for="InputName">Metier</label>
    <input type="text" class="form-control" name="metier" id="InputName" required>
  </div>
  <div class="form-group">
    <label for="InputName">Date de Naissance (JJ-MM-AAAA)</label>
    <input type="text" class="form-control" name="date_naissance" id="InputName" required>
  </div>
  </div>
  </div>
  <button type="submit" name="envoyer" class="btn btn-primary btn-lg">Ajouter</button>
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
