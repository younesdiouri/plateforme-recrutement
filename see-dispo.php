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
						Selectionner un worker pour afficher sa fiche de disponibilité:
                        </div>
                        <!-- /.panel-heading -->
						<div class="col-lg-4">
                        <div class="panel-body">
						<form method="POST" action="see-dispo-exe.php" role="form">
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
		<br />
		<input type="submit" name="envoyer" value="Soumettre" class="btn btn-lg btn-default"/>
		</div>
		</div>
		</Div>
		</form>