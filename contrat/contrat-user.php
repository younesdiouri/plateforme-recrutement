

<head>
		<meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link href="http://getbootstrap.com/examples/theme/theme.css" rel="stylesheet"/>
	<link href="contrat-user.css" rel="stylesheet"/>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
<script src="contrat-user.js"></script>
</head>
<body>
<?php
include("simple-nav.php");
 ?>
<div class="container">
      <div class="row">
      <br /><h1><center>Vos Workers</center></h1>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Nom Prenom</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="noavatar.png" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Compétences:</td>
                        <td>Programmation</td>
                      </tr>
                      <tr>
                        <td>Date d'inscription:</td>
                        <td>06/23/2015</td>
                      </tr>
                      <tr>
                        <td>Date de naissance:</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                         <tr>
                            
                        <tr>
                        <td>Adresse:</td>
                        <td>12 rue des Joncquilles</td>
                      </tr>
                      <tr>
                        <td>Mail</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>Téléphone</td>
                        <td>0142154521(dom)<br><br>0624154578(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <div id="SkypeButton_Call_<?php echo 'echo123';?>_1">
                  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Envoyer un message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        
                    </div>
            
          </div>
        </div>
      
<script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>

 <script type="text/javascript">
 Skype.ui({
 "name": "call",
 "element": "SkypeButton_Call_<?php echo 'echo123';?>_1",
 "participants": ["<?php echo 'echo123';?>"],
 "imageSize": 32
 });
 </script>
</div>
</center>
</body>
