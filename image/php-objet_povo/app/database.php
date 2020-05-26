<?php

class database{

	private $host;
	private $bdd;
	private $user;
	private $mdp;

	public function __construct($bdd, $host='localhost', $user='root', $mdp=''){
		$this->bdd=$bdd;
		$this->root=$root;
		$this->user=$user;
		$this->mdp=$mdp;
	}

	private function getPdo{
		try{
			$bdd = new PDO ('mysql:host='.$this->host.'dbname='.$this->bdd, $this->mdp, $this->user);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)

		}catch(Exception $e){
			die('Erreur : ' .$e -> getmessage());
		}
	}

}