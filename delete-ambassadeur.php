<?php 
$num=$_GET["num"];
include("config.php");
 $req="delete from manager where id=$num";
 mysql_query($req);
 header("location:list-ambassadeur.php");

?>