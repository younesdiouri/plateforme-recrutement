<?php 
$num=$_GET["num"];
include("config.php");
 $req="delete from worker where id=$num";
 mysql_query($req);
 header("location:list-worker-manager.php");

?>