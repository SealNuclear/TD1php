<?php


class Voiture
{
    private $marque;
    private $couleur;
    private $immatriculation;

    // un getter
    public function getMarque() {
        return $this->marque;
    }

    // un setter
    public function setMarque($m) {
        if ( strlen($m) <=8) {
            $this->marque = $m;
        }

    }

    public function getCouleur()
    {
        return $this->couleur;
    }


    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getImmatriculation()
    {
        return $this->immatriculation;
    }


    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;
    }

    // un constructeur
    public function __construct($m, $c, $i) {
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
    }

    // une methode d'affichage.
    public function afficher() {
        echo "<li>Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur)";

    }
}
?>