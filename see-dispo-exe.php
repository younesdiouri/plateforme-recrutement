<?php
include ('see-dispo.php');
if(isset($_POST["envoyer"])){
include("config.php");

$id_user=$_POST["worker"];
$req="select nom,prenom,lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche,date_debut,date_fin from disponibilite,worker where (id_worker='$id_user' and id_worker=worker.id)";
$query=mysql_query($req);
$data=mysql_fetch_assoc($query);
?>
<br /> <br />
                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th><th>Prénom</th>
                                                    <th>Date de début</th>
													<th>Date de fin</th>
                                                    <th>Lundi</th>
                                                    <th>Mardi</th>
													<th>Mercredi</th>
													<th>Jeudi</th>
													<th>Vendredi</th>
													<th>Samedi</th>
													<th>Dimanche</th>
													
                                                </tr>
												
													
													
												
                                            </thead>
                                            <tbody>
											<?php
											while($data)
													{
														
											
													echo "<tr><td>".$data["nom"]."</td><td>".$data["prenom"]."</td><td>".$data["date_debut"]."</td><td>".$data["date_fin"]."</td><td>"
													.$data["lundi"]."</td><td>".$data["mardi"]."</td><td>".$data["mercredi"]."</td><td>".$data["jeudi"]."</td><td>".$data["vendredi"].
													"</td><td>".$data["samedi"]."</td><td>".$data["dimanche"]."</td></tr>";
													
													$data=mysql_fetch_assoc($resultat);
													
													}
}

													?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->