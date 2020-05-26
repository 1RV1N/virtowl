<?php
	require 'app/personne.php';
	require 'app/form.php';

	$yoann = new personne('coualan','yoann','24','masculin'); // objet de type personne
	// $yoann->nom ='coualan';
	// $yoann->prenom='yoann';
	// $yoann->age='24';
	// $yoann->genre='masculin';

	$joel =new personne('sylvius','joel','25','masculin');
	// $joel->nom='sylvius';
	// $joel->prenom='joel';
	// $joel->age='25';
	// $joel->genre='masculin';

	var_dump($yoann,$joel);

	echo $yoann->getIDENTITE();
	echo '<br>';
	echo $joel->getIDENTITE();

	// echo $yoann->nom.' '.$yoann->prenom;

	// <pre> </pre> pour afficher comme le code doit s'afficher.
	echo '<br><br>';


	$form = new form();
	echo '<form action="#" method="post">';
	echo $form->text('nom');
	echo $form->email('email');
	echo $form->mdp('mdp');
	echo '</form>';
