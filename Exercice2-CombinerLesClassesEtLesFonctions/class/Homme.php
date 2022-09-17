<?php

class Homme extends Personne
{
    public function __construct($nomX, $prenomX, $ageX)
    {
        parent::__construct($nomX, $prenomX, $ageX); //parent uzywamy gdy nie mamy dostepu, i chcemy ja odpalic dokladnie ta sama
        // $this->sex = $sex;
        $this->setSex('Homme'); //uruchamianie funkcji z rodzica? najlepszy sposob/ jesli jest nadpisana i chce konecznie odpalic przez parenta
    }

    // public function affichageX()
    // {
    //     echo "sex= " .$this->sex;
    // }
}
