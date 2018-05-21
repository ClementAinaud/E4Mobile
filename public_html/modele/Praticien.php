<?php
class Praticien{
    private $num;
    private $nom;
    private $prenom;
    private $adresse;
    private $cp;
    private $ville;
    private $coef;
    private $typeCode;
    
    function __construct($num,$nom,$prenom,$adresse,$cp,$ville,$coef,$typeCode){
      $this->num = $num;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->adresse = $adresse;
      $this->cp = $cp;
      $this->ville = $ville;
      $this->coef = $coef;
      $this->typeCode = $typeCode;
        
        
    }
    
    public function getNum(){
		return $this->num;
	}
         public function getPrenom(){
		return $this->nom;
	}
         public function getNom(){
		return $this->prenom;
	}
         public function getAdresse(){
		return $this->adresse;
	}
         public function getCp(){
		return $this->cp;
	}
         public function getVille(){
		return $this->ville;
	} public function getCoef(){
		return $this->coef;
	} public function getTypeCode(){
		return $this->typeCode;
	}
        
        
        
    
}