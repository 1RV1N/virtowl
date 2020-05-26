<?php


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
}


?>