<?php
// This is a sample code in case you wish to check the username from a mysql db table
 include("config.php");
if(isset($_POST['login'])) {
$username = $_POST['login'];

 
$sql_check = mysql_query("select id from worker where login='".$username."'")
 or die(mysql_error());
 
if(mysql_num_rows($sql_check)) {
    echo '<div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>L\'identifiant <strong>'.$username.'</strong> est déjà utilisé.</div>';
}
 else 
 {
    echo '<div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> Identifiant Valide.</div>';
}

}

?>