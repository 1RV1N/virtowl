<?php
class Personne{

  private $nom;
  private $prenom;
  private $age;
  private $genre;

  public function __construct($nom, $prenom, $age, $genre){
    $this->nom    = $nom;
    $this->prenom = $prenom;
    $this->age    = $age;
    $this->genre  = $genre;
  }

  /**
   * Permet de définir $nom
   * @param String $nom : nom du Personnage
   * @return String $nom
   * @author Yoann
   */
  public function setNom($nom){
    $this->nom = $nom;
    return $this->nom;
  }
  public function getNom(){
    return $this->nom;
  }

  public function setPrenom($prenom){
    $this->prenom = $prenom;
    return $this->prenom;
  }
  public function getPrenom(){
    return $this->prenom;
  }

  public function setAge($age){
    $this->age = $age;
    return $this->age;
  }
  public function getAge(){
    return $this->age;
  }

  public function setGenre($genre){
    $this->genre = $genre;
    return $this->genre;
  }
  public function getGenre(){
    return $this->genre;
  }

  public function getIdentite(){
    return $this->getAbbreviation().' '.$this->nom.' '.$this->prenom.' à '.$this->age.' ans';
  }

  /**
   * Génère une abbréviation selon le genre de Personne
   * @return String : abbréviation
   * @author Yoann
   */
  public function getAbbreviation(){
    if($this->genre == 'Masculin'){
      $abbr = 'Mr';
    }
    else{
      $abbr = 'Mme';
    }

    return $abbr;
  }

}
