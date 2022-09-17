<?php

class Femme extends Personne
{
    public function __construct($nomX, $prenomX, $ageX)
    {
        parent::__construct($nomX, $prenomX, $ageX); //parent uzywamy gdy nie mamy dostepu, i chcemy ja odpalic dokladnie ta sama
        // $this->sex = $sex;
        $this->setSex('Femme'); //uruchamianie funkcji z rodzica?
    }
}
