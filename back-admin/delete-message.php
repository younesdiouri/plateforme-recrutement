<?php 
$num=$_GET["num"];
include("config.php");
 $req="delete from message where id=$num";
 mysql_query($req);
 header("location:admin-message.php");

?>