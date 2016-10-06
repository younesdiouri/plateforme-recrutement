<?php
include ('dispo.php');
if(isset($_POST["envoyer"])){
include("config.php");
$id_user=$_POST["worker"];

$up = "update disponibilite set ";
$query="insert into disponibilite(lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche,date_debut,date_fin,id_worker) VALUES (";
$check="";
$checkm="";
$checkme="";
$checkje="";
$checkve="";
$checksa="";
$checkdi="";
if(isset($_POST["lundi"])){

$check = $_POST["lundi"];

	 } 
	 
if(empty($_POST["lundi"])){
$check =0;}

$up .= "lundi = '$check',";
$query.="'$check',";

if(isset($_POST["mardi"])){
$checkm = $_POST["mardi"];
}
	  
if(empty($_POST["mardi"])){
$checkm =0;}

$query.="'$checkm',";
$up .= " mardi = '$checkm',";

if(isset($_POST["mercredi"])){
$checkme = $_POST["mercredi"];
}

if(empty($_POST["mercredi"])){
$checkme =0;}

$query.="'$checkme',";
$up .= " mercredi = '$checkme',";

if(isset($_POST["jeudi"])){
$checkje = $_POST["jeudi"];}
	
 if(empty($_POST["jeudi"])){
$checkje =0;}

$query.="'$checkje',";
$up .= " jeudi = '$checkje',";

if(isset($_POST["vendredi"])){
$checkve = $_POST["vendredi"];}

if(empty($_POST["vendredi"])){
$checkve =0;}

$query.="'$checkve',";
$up .= " vendredi = '$checkve',";

if(isset($_POST["samedi"])){
$checksa = $_POST["samedi"];}
	 
	 if(empty($_POST["samedi"])){
$checksa =0;}

$query.="'$checksa',";
$up .= " samedi = '$checksa',";

if(isset($_POST["dimanche"])){
$checkdi = $_POST["dimanche"];}
	 
	 if(empty($_POST["dimanche"])){
$checkdi =0;}

$query.="'$checkdi',";
$up .= " dimanche = '$checkdi',";

$date = explode(" - ", $_POST["date"]);
$date_debut=$date[0];
$date_fin=$date[1];

$query.="'$date_debut','$date_fin','$id_user')";
$up.=" date_debut='$date_debut', date_fin = '$date_fin' where id_worker='$id_user'";


$fir="select count(*) from disponibilite where id_worker=$id_user";
$que=mysql_query($fir);
if(!$que) echo $que."".mysql_error();
$tab=mysql_fetch_array($que);

if($tab[0]==1)
{
	
$req=mysql_query($up);
}
else
{
	
	$req=mysql_query($query);
}

if(!$req) echo $req."".mysql_error();
}
?>