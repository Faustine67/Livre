<?php

Class Livre {

     private $_titre;
     private $_nombrePage;
     private $_anneeParution;
     private $_prix;

     public function __construct ($titre,$nombrePage,$anneeParution,$prix){ 
          $this-> _titre= $titre;
          $this-> _nombrePage= $nombrePage;
          $this-> _anneeParution= $anneeParution;
          $this-> _prix= $prix;
     }

     public function getTitre(){
          return $this->_titre;
     }

     public function getNombrePage(){
          return $this->_nombrePage;
     }

     public function getanneeParution(){
          return $this->_anneeParution;
     }

     public function getPrix(){
          return $this->_prix;
     }

     public function getAuteur(){
          return $this->_auteur;
     }
 }
?>