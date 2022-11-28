<h1> Livres </h1>
     <p> 
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un 
auteur. Un auteur comporte un nom et un prénom. <br>
Une méthode toString() sera appréciée dans chacune de vos classes. <br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie 
complète d’un auteur : <br>
     </p>

<h2> Resultat</h2>

<?php

// spl_autoload_register(function ($class_Livre)) {

// require_once $class_Livre . '.php';
// }
// spl_autoload_register(function ($class_Auteur) {

// require_once $class_Auteur . '.php';
// }

require_once('Livre.php');
require_once('Auteur.php');

$L1 = new Livre("Titre 1", 12, 1990, 16);
$L2 = new Livre("Titre 2", 18, 1995, 100);

$A1 = new Auteur("Bagieu", "Penelope") ;
$A1->addLivre($L1);
$A1->addLivre($L2);


echo $A1->getInfos();

$L3 = new Livre("Titre 3", 350, 1993, 28);
$L4 = new Livre("Titre 4", 50, 1996, 10);

$A2 = new Auteur("Kazinski", "abcd") ;
$A2->addLivre($L3);
$A2->addLivre($L4);


echo $A2->getInfos();

//$A2 = new Auteur("Kazinski", "A.J","Le dernier homme bon");


//echo $A1->getAuteur()."<br>";
//echo $A2->getAuteur()."<br>";

