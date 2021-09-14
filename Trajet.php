<?php


class Trajet
{
private $id;
private $depart;
private $arrivee;
private $date;
private $nbplaces;
private $prix;
private $nbplaces;
private $conducteur_login;

    /**
     * Trajet constructor.
     * @param $id
     * @param $depart
     * @param $arrivee
     * @param $date
     * @param $nbplaces
     * @param $prix
     * @param $conducteur_login
     */
    public function __construct($id, $depart, $arrivee, $date, $nbplaces, $prix, $conducteur_login)
    {
        $this->id = $id;
        $this->depart = $depart;
        $this->arrivee = $arrivee;
        $this->date = $date;
        $this->nbplaces = $nbplaces;
        $this->prix = $prix;
        $this->conducteur_login = $conducteur_login;
    }

    public function get($nom_attribut){
    return $this->$nom_attribut;
}
public function set($nom_attribut,$valeur){
    $this->$nom_attribut = $valeur;
}


}
