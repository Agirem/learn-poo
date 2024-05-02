<?php
class Calculatrice{
    public $marque;
    public $type;
    public $niveau_scolaire;


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

$a = 2;
$b = 2;

$calculatrice = new Calculatrice();
$calculatrice->marque = 'Casio';
$calculatrice->type = 'Scientifique';
$calculatrice->niveau_scolaire = 'Lycée';

var_dump($calculatrice);

echo $calculatrice->Additionner($a, $b);
echo $calculatrice->Soustraire($a, $b);
echo $calculatrice->Multiplier($a, $b);
echo $calculatrice->Diviser($a, $b);
