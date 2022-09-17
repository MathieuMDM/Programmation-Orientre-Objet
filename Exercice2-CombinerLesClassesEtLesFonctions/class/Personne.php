<?php

class Personne
{
    private $nom;
    private $prenom;
    private $age;
    private $sex; //mozna uzyc protected aby uzywalo tylko w tej clasie a nie np w homme

    
    public function __construct($nomX, $prenomX, $ageX)
    {
        $this->nom=$nomX;
        $this->prenom=$prenomX;
        $this->age=$ageX;
    }

    public function affichage()
    {
        echo "nom= " .$this->nom . ", prenom= ". $this->prenom;
    }

    protected function setSex($s)
    {
        $this->sex=$s;
    }

    public function affichageD()
    {
        $this->affichage();
        echo ", sex= " . $this->sex . "<br>";
    }
}