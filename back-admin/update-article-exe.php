<?php
	$id=$_POST["id"];
	$titre=$_POST["titre"];
	$description=$_POST["description"];
	$date=$_POST["date"];
	
	
	
include("config.php");
$req="UPDATE article 
        SET titre='$titre', description='$description', date='$date'    
		WHERE id='$id'";
          
mysql_query($req);	

header("location:admin-article.php");


?>