<?php include("simple-nav.php");?>
<!DOCTYPE HTML>
<html>
<?php include("config.php");
?>
<head> <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link href="http://getbootstrap.com/examples/theme/theme.css" rel="stylesheet"/>
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="contact.css">
<title>Contact</title>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Nous contacter <small>un staff est à votre disposition</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form role="form" method="POST" action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nom</label>
                            <input type="text" class="form-control" id="name" name="nom" placeholder="Saisir Nom" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Adresse e-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="mail" id="email" placeholder="Saisir E-mail" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Objet</label>
                            <select id="subject" name="sujet" class="form-control" required="required">
                                <option value="na" selected="">Selectionner:</option>
                                <option value="service">Service client</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="support">Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="envoyer" class="btn btn-primary pull-right" id="btnContactUs">
                            Envoyer</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend>Nos coordonées</legend>
            <address>
                <strong>www.staff-emploi.com</strong><br>
                
                <abbr title="Phone">
                    Tel:</abbr>
                +33 6 24 72 80 82
            </address>
            <address>
                <strong>Laureat Ndouna</strong><br>
                <a href="mailto:#">laureat@staff-emploi.com</a>
            </address>
			<address>
                <strong>Demande d'information</strong><br>
                <a href="mailto:#">contact@staff-emploi.com</a>
            </address>
			<address>
                <strong>Service RH</strong><br>
                <a href="mailto:#">candidatures@staff-emploi.com</a>
            </address>
			<address>
                <strong>Service informatique</strong><br>
                <a href="mailto:#">younes@staff-emploi.com</a>
            </address>
            </form>
        </div>
    </div>
	<?php 
	if(isset($_POST["envoyer"]))
	{
		$nom=$_POST["nom"];
		$mail=$_POST["mail"];
		$objet=$_POST["sujet"];
		$descriptif=strip_tags($_POST["message"]);
		$date = date("d-m-Y");
		
		$req="insert into contact(nom,mail,objet,date,descriptif) VALUES ('$nom','$mail','$objet','$date','$descriptif')";
		$query=mysql_query($req);
		if(!$query){
			echo "<br /> Un problème est survenu lors de l'envoie du message ";
		}
		else
		{
			echo "<br />Le message a ete transmis.<br />";
		}
	}
	?>
</div>
