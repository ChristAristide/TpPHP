<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author Kouassi Christ
 */
class Personne {
    //put your code here
    
    private $nom;
    private $prenom;
    private $adresse;
    
    public function __construct($nom, $prenom, $adresse) {
        
        $this->setAdresse($adresse);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        
        echo "L' objet ".$this->prenom." a été créé</br>" ;
    }
    
    public function __destruct() {
        echo "L' objet ".$this->prenom." a été détruit</br>" ;
    }
            
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }
    
    function getPersonne(){
        $coordonnees = 'Nom : '.$this->getNom().'</br>Prenom : '.$this->getPrenom().'</br>Adresse : '.$this->getAdresse().'</br>';
        return $coordonnees;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }


}
