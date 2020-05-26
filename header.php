<?php
	//require 'phpApp/Personne.php';
	require 'phpApp/form.php';

	$form = new Form($_POST);

	if ( (!empty($_POST["email"])) AND  (!empty($_POST["nom"])) AND  (!empty($_POST["prenom"])) AND  (!empty($_POST["message"])) AND  (!empty($_POST["objet"])) ) {


  $mail = "irvincent.v.13@gmail.com"; // Déclaration de l'adresse de destination.
  $prenom =$_POST["nom"];
  $nom = $_POST["prenom"];
  $emaildumec =  $_POST["email"];
  $messagedumec =  $_POST["message"];
  if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
  {
    $passage_ligne = "\r\n";
  }
  else
  {
    $passage_ligne = "\n";
  }
  //=====Déclaration des messages au format texte et au format HTML.
  $message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
  $message_html = "<html><head></head><body>". $prenom ." ".$nom."<br> email : " . $emaildumec . "<br><br> ".$messagedumec."<br><br> <i>#virtowl</i>.</body></html>";
  //==========
   
  //=====Création de la boundary
  $boundary = "-----=".md5(rand());
  //==========
   
  //=====Définition du sujet.
  $sujet = $_POST["objet"];
  //=========
   
  //=====Création du header de l'e-mail.
  $header = "From: \"test\"<test@mail.fr>".$passage_ligne;
  $header.= "Reply-to: \"test\" <test@mail.fr>".$passage_ligne;
  $header.= "MIME-Version: 1.0".$passage_ligne;
  $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
  //==========
   
  //=====Création du message.
  $message = $passage_ligne."--".$boundary.$passage_ligne;
  //==========
  $message.= $passage_ligne."--".$boundary.$passage_ligne;
  //=====Ajout du message au format HTML
  $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
  //$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
  $message.= $passage_ligne.$message_html.$passage_ligne;
  //==========
  $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
  $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
  //==========

    

  //echo $mail,'<br> ',$sujet,'<br><br> ',$message,'<br><br> ',$header ;

  //=====Envoi de l'e-mail.
  mail($mail,$sujet,$message,$header);
//==========
}else{
	//echo 'ta mere';
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<title> Virtowl </title>

		<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="script/jquery.maphilight.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<script type="text/javascript" src="script/script.js"></script>

	  	<link rel="stylesheet" media="screen and (min-width: 1300px)" href="css/chaton2.css" type="text/css" />
	  	<link rel="stylesheet" media="screen and (max-width: 1299px)" href="css/chaton.css" type="text/css"/>
	  	<link rel="stylesheet" type="text/css" href="css/loader.css">

	</head>
	<body>
		<header>
			<a href="index.php"><img src="image/logo1.svg"></a>
			<ul class="">
				<li data-toggle="modal" data-target="#myModal2"><a>CONTACT</a></li>
				<li><a href="partenaire.php" title="" alt=""> PARTENAIRES</a></li>
				<li><a href="histoire.php" title="" alt=""> NOTRE HISTOIRE</a></li>
				<li><a href="experience.php" title="" alt=""> L'EXPERIENCE</a></li>
				<li><a href="creation.php" title="" alt=""> NOS CREATIONS</a></li>
			</ul>

			<!-- Modal -->
			<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel2">NOUS CONTACTER</h4>
						</div>

						<div class="modal-body">

							<!-- <form action="sendEmail.php" method="POST"> -->
							<form action="" method="POST">
						        <div class="form-style-8">
								    <?php
								    echo $form->text('nom');
								    echo $form->text('prenom');
								    echo $form->text('objet');
								    echo $form->text('email');
								    echo $form->submit('Envoyer');
								    ?>
								</div>

								<textarea placeholder="Message" name="message" cols="50"></textarea>

						    </form>
						    <div id="result_form"> </div>

						    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.6333759051818!2d2.3832845160279876!3d48.84613147928637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6720d997a4b7d%3A0x86fe46d4b5ab876!2s21+Rue+Erard%2C+75012+Paris!5e0!3m2!1sfr!2sfr!4v1487093939501" frameborder="0" style="border:0" allowfullscreen></iframe>

						</div>

					</div><!-- modal-content -->
				</div><!-- modal-dialog -->
			</div><!-- modal -->
		</header>
