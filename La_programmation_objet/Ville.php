<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ville
 *
 * @author Kouassi Christ
 */
class Ville {

    //put your code here

    private $nom;
    private $departement;

    public function __construct($nom, $departement) {
        $this->setNom($nom);
        $this->setDepartement($departement);
    }

    public function affiche() {
        echo "la ville " . $this->nom . " est dans le département " . $this->departement;
    }

    function getNom() {
        return $this->nom;
    }

    function getDepartement() {
        return $this->departement;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setDepartement($departement) {
        $this->departement = $departement;
    }

}
