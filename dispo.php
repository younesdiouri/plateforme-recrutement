<?php 
include("headeradmin.php");	?>
<script type="text/javascript" src="moment.js"></script>
<script type="text/javascript" src="daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="daterangepicker.css" />
 <div id="page-wrapper">
            
            
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PGI-staff-emploi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
            <h4>Définir une plage horaire:</h4>
			<br />
			<div class="col-lg-3">
			
			
			
			
			
			<form class="form" role="form" method="POST" action="post-dispo.php">
			<?php 
			$req="select id,nom,prenom from worker order by id";
			$query=mysql_query($req);
			$ligne=mysql_fetch_assoc($query);
			?>
			<br /><br />
			<label for="InputName">Choisir un worker :</label>
    <select class="form-control" name="worker">
		<?php
			while($ligne)
			{
				echo "<option value='".$ligne["id"]."'>".$ligne["nom"]." ".$ligne["prenom"]."</option>";
				$ligne=mysql_fetch_assoc($query);
			}
		?>
	</select>
	<br />
            <input type="text" id="demo" name="date" class="form-control">
            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
			
          </div>
		  </div>
		  </div>
		  <br />
		  <br />
		  <br />
		  <br />
		   <br /> <br /> <br /> <br /> <br /> <br />
		  
		<table class="table table-striped table-bordered table-hover"><tr><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th><th>Dimanche</th></tr>
			<tr class="success"><td><label><input type="radio" class="no-margin" name="lundi" value="matin"> Matinée</label></td>
			<td><label><input type="radio" class="no-margin" name="mardi" value="matin"  > Matinée</label></td>
			<td><label><input type="radio" class="no-margin" name="mercredi" value="matin"> Matinée</label></td>
			<td><label><input type="radio" class="no-margin" name="jeudi" value="matin"> Matinée</label></td>
			<td><label><input type="radio" class="no-margin" name="vendredi" value="matin"> Matinée</label></td>
			<td><label><input type="radio" class="no-margin" name="samedi" value="matin"> Matinée</label></td>
			<td><label><input type="radio" class="no-margin" name="dimanche" value="matin"> Matinée</label></td></tr>
		
			<tr class="info"><td><label><input type="radio" class="no-margin" name="lundi" value="jour"> Journée</label></td>
			<td><label><input type="radio" class="no-margin" name="mardi" value="jour"> Journée</label></td>
			<td><label><input type="radio" class="no-margin" name="mercredi" value="jour"> Journée</label></td>
			<td><label><input type="radio" class="no-margin" name="jeudi" value="jour"> Journée</label></td>
			<td><label><input type="radio" class="no-margin" name="vendredi" value="jour"> Journée</label></td>
			<td><label><input type="radio" class="no-margin" name="samedi" value="jour"> Journée</label></td>
			<td><label><input type="radio" class="no-margin" name="dimanche" value="jour"> Journée</label></td></tr>
		
			<tr class="warning"><td><label><input type="radio" class="no-margin" name="lundi" value="soir"> Soirée</label></td>
			<td><label><input type="radio" class="no-margin" name="mardi" value="soir"> Soirée</label></td>
			<td><label><input type="radio" class="no-margin" name="mercredi" value="soir"> Soirée</label></td>
			<td><label><input type="radio" class="no-margin" name="jeudi" value="soir"> Soirée</label></td>
			<td><label><input type="radio" class="no-margin" name="vendredi" value="soir"> Soirée</label></td>
			<td><label><input type="radio" class="no-margin" name="samedi" value="soir"> Soirée</label></td>
			<td><label><input type="radio" class="no-margin" name="dimanche" value="soir"> Soirée</label></td></tr>
		</table>
		<br />
		<input type="submit" name="envoyer" value="Soumettre" class="btn btn-lg btn-default"/>
		
		</form>
		  <script>
		  $('#demo').daterangepicker({
    "startDate": "01/01/2016",
    "endDate": "12/31/2016"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});
</script>