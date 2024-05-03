<?php
class Calculatrice{
    private $marque;
    private $type;
    private $niveau_scolaire;

// Getters et setters
public function getMarque(){
   return $this-> marque;
}
public function getType(){
   return $this->type;
}
public function getNiveauScolaire(){
   return $this->niveau_scolaire;
}

public function setMarque($marque){
$this->marque = $marque;
}
public function setType($type){
    $this->type = $type;
}
public function setNiveauScolaire($niveau_scolaire){
    $this->niveau_scolaire = $niveau_scolaire;
}
    public function Additionner($a, $b){
        return $a + $b;
    }
    public function Soustraire($a, $b){
        return $a - $b;
    }
    public function Multiplier($a, $b){
        return $a * $b;
    }

    public function Diviser($a, $b){
        return $a / $b;
    }
}


$calculatrice = new Calculatrice();
$calculatrice->setMarque('Casio');
$calculatrice->setType('Scientifique');
$calculatrice->setNiveauScolaire('Lycee');

echo $calculatrice->getMarque();
echo $calculatrice->getType();
echo $calculatrice->getNiveauScolaire();