<?php

class Client
{
    private $nom;
    private $societe;
    private $commande;
    
    public function __construct($nomX, $societeX, $commandeX)
    {
        $this->nom=$nomX;
        $this->societe=$societeX;
        $this->commande=$commandeX;
    }

    public function affichage()
    {
        echo "nom= " .$this->nom ." societe= ". $this->societe ." commande= ". $this->commande;
    }
}
