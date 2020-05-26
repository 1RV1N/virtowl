<?php

class personne{

		private $nom;
		private $prenom;
		private $age;
		private $genre;

		public function __construct($name, $prenom, $age, $genre){
			$this->nom = $name;
			$this->prenom = $prenom;
			$this->age = $age;
			$this->genre = $genre;
		}

		/**
		*
		*
		*/
		public function setNOM(){
			$this->prenom = $name;
			return $this->nom;
		}
		public function getNOM(){
			return $this->nom;
		}
		public function setPRENOM(){
			$this->prenom = $prenom;
			return $this->prenom;
		}
		public function getPRENOM(){
			return $this->prenom;
		}
		public function setAGE(){
			$this->age = $age;
			return $this->age;
		}
		public function getAGE(){
			return $this->age;
		}
		public function setGENRE(){
			$this->genre=$genre;
			return $this->genre;
		}
		public function getGENRE(){
			return $this->genre;
		}


		/**
		* genere une abbrevation selon le genre de personne
		*@return string : abbrevation
		*@author yoann
		*/
		
		/**
		*[getAbbrevation description]
		*@return [type] [description]
		*/
		public function getABBR(){
			if($this->genre == 'masculin'){
				$abbr = 'MR';
			}else{
				$abbr = 'MMS';
			}
			return $abbr;
		}
		public function getIDENTITE(){

			return $this->getABBR().' '.$this->nom.' '.$this->prenom.' à '.$this->age.'ans';
		}

	}
?>