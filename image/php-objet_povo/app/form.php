<?php
class Form{

  private $data;

  public function __construct($datas = array()){
    // va sauvegarder dans $this->data les données envoyées par le formulaire ($_POST)
    $this->data = $datas;
  }

  /**
   * Retourne la valeur associée au champ du formulaire
   * @param  String $name   : nom de l'input
   * @return String or Null : value
   */
  private function getValue($name){
    if(array_key_exists($name, $this->data)){
      return $this->data[$name];
    }
    else{
      return null;
    }
  }

  /**
   * Encadre avec une balise le <label> et <input>
   * @param  String $name : attribut 'name' et id de l'input, 'for' du label
   * @param  String $type : attribut 'type' de l'input
   * @return String       : balises <label> et <input> surrounded
   */
  public function surround($name, $type){
    if( $type == 'submit' OR $type == 'reset'){
      return '<div>'.$this->submitBtn($name,$type).'</div>';
    }
    else{
      return '<div>'.$this->label($name).$this->input($type, $name).'</div>';
    }
  }

/**
   * Génère une balise <label>
   * @param  String $name : attribut 'for' du <label>
   * @return String       : balise <label>
   */
  public function label($name){
    return '<label for="'.$name.'">'.$name.'</label>';
  }

  /**
   * Génère une balise <input>
   * @param  String $type : attribut 'type' de l'input
   * @param  String $name : attribut 'name' de l'input
   * @return String       : balise <input>
   */
  public function input($type, $name){
    return '<input type="'.$type.'" name="'.$name.'" id="'.$name.'" value="'.$this->getValue($name).'">';
  }

  /**
   * Génère une balise <input> du type submit
   * @param  String $name : attribut 'name' et 'value' de l'input
   * @return String       : balise <input>
   */
  public function submitBtn($name, $type){
    return '<input type="'.$type.'" name="'.$name.'" value="'.$name.'">';
  }
  public function action($name='#', $method='POST'){
    return '<form action="'.$name.'" method="'.$method.'">';
  }

  /**
   * Génère un bloc <label> + <input> de type 'text'
   * @param  String $name : nom de l'input
   * @return String       : balises <label> + <input> surrounded
   */
  public function text($name){
    return $this->surround($name, 'text');
  }
  

  /**
   * Génère un bloc <label> + <input> de type 'password'
   * @param  String $name : nom de l'input
   * @return String       : balises <label> + <input> surrounded
   */
  public function password($name){
    return $this->surround($name, 'password');
  }

  /**
   * Génère un bloc <label> + <input> de type 'email'
   * @param  String $name : nom de l'input
   * @return String       : balises <label> + <input> surrounded
   */
  public function email($name){
    return $this->surround($name, 'email');
  }

  /**
   * Génère un bouton submit
   * @param  String $name : attribut name et value de l'input
   * @return String       : balise <input> surrounded
   */
  public function submit($name){
    return $this->surround($name, 'submit');
  }

  public function reset($name){
    return $this->surround($name, 'reset');
  }

}
