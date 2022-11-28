<?php
require_once('Livre.php');

Class Auteur {

    private $_nom;
    private $_prenom;
    private $_listLivres = array();

    public function __construct($nom,$prenom){
        $this-> _nom= $nom;
        $this-> _prenom= $prenom;
    }

    public function addLivre($livre)
    {
        $this->_listLivres[$livre->getTitre()] = $livre;
    }

    function getInfosLivres(){
        $informationLivres = "";
        foreach ($this->_listLivres as $key => $value){
            $informationLivres = $informationLivres . $key . " " . $value->getNombrePage() . " " . $value->getanneeParution() . " " . $value->getPrix() . "<br>";
        }
        return $informationLivres;
    }

    public function getInfos(){
        return $this->_nom . " " . $this->_prenom . "<br>" . $this->getInfosLivres();
    }
}