<?php


class Utilisateur
{
private $login;
private $nom;
private  $prenom;

    /**
     * Utilisateur constructor.
     * @param $login
     * @param $nom
     * @param $prenom
     */
    public function __construct($login, $nom, $prenom)
    {
        $this->login = $login;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function get($nom_attribut) {
        return $this->$nom_attribut;
}
    public function set($nom_attribut,$valeur) {
        $this->$nom_attribut = $valeur;
    }

}