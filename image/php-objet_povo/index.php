<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="script/jquery.maphilight.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	  	<link rel="stylesheet" type="text/css" href="style.css">

	  	<script type="text/javascript">
			//auto expand textarea
			function adjust_textarea(h) {
			    h.style.height = "20px";
			    h.style.height = (h.scrollHeight)+"px";
			}
		</script>

	</head>

	<body>




		<div class="form-style-8">
		  <h2>Login to your account</h2>
		  <form action="index.php" method="POST">
		    <input type="text" name="name" placeholder="Full Name" />
		    <input type="text" name="lastname" placeholder="Full Name" />
		    <input type="email" name="email" placeholder="Email" />
		    <textarea placeholder="Message" name="message" onkeyup="adjust_textarea(this)"></textarea>
		    
		    <input type="submit" name="submit" value="Submit" />
		  </form>
		</div>



	</body>
</html>

<?php
ini_set('display_errors', 1);
require 'app/Personne.php';
require 'app/form.php';
require 'app/util.php';
/*
$yoann = new Personne('Coualan', 'Yoann', 24, 'Masculin'); // Objet de type Personne
$joel = new Personne('Sylvius', 'Joël', 25, 'Masculin');

echo $yoann->getIdentite();
echo '<br>';
echo $joel->getIdentite();
echo '<br><br>';

$form = new Form($_POST);

echo '<pre>';
var_dump($_POST);
echo '</pre>';



echo '<form action="index.php" method="POST">';
echo $form->text('email');
echo $form->text('mdp');
echo $form->action('@');
echo $form->reset('reset');
echo $form->submit('envoyer');

echo '</form>';

echo '<br><br>';
*/
$num = Util::zeroInitial(8);
echo $num;
if ( (!empty($_POST["email"])) AND  (!empty($_POST["name"])) AND  (!empty($_POST["lastname"])) ) {


	$mail = "irvincent.v.13@gmail.com"; // Déclaration de l'adresse de destination.
	$prenom =$_POST["name"];
	$nom = $_POST["lastname"];
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
	$message_html = "<html><head></head><body><b>". $prenom ." ".$nom."</b><br> email : " . $emaildumec . "<br><br> ".$messagedumec."<br><br> <i>#virtowl</i>.</body></html>";
	//==========
	 
	//=====Création de la boundary
	$boundary = "-----=".md5(rand());
	//==========
	 
	//=====Définition du sujet.
	$sujet = "Virtowl !";
	//=========
	 
	//=====Création du header de l'e-mail.
	$header = "From: \"test\"<test@mail.fr>".$passage_ligne;
	$header.= "Reply-to: \"test\" <test@mail.fr>".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	//==========
	 
	//=====Création du message.
	$message = $passage_ligne."--".$boundary.$passage_ligne;
	//=====Ajout du message au format texte.
	$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_txt.$passage_ligne;
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

	echo '<br>';

	echo $mail,'<br> ',$sujet,'<br><br> ',$message,'<br><br> ',$header ;

	//=====Envoi de l'e-mail.
	mail($mail,$sujet,$message,$header);
//==========
}else{
	echo 'ta mere ill manque des données';
}


?>

