<?php 
$num=$_GET["num"];
include("config.php");
 $req="delete from entreprise where id=$num";
 mysql_query($req);
 header("location:list-entreprise.php");

?>