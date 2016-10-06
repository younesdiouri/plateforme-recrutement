<?php 
$num=$_GET["num"];
include("config.php");
 $req="delete from article where id=$num";
 mysql_query($req);
 header("location:admin-article.php");

?>