<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require 'classes.php';

$maison1 = new Maison();
echo $maison1->getPays(). "<br>";
echo $maison1->getCodepostal(). "<br>";
echo $maison1->getVille(). "<br>";
echo $maison1->getPieces(). "<br>";
echo $maison1->getPays(). "<br>";
echo $maison1->isJardin(). "<br>";
echo $maison1->isGarage(). "<br>";
echo $maison1->getEtages(). "<br>";


$maison2 = new Maison();


echo '<br><br>';
$appartement1 = new Appartement();

$appartement1->setPays('Hollande');
$appartement1->setVille('Amsterdam');
$appartement1->setCodepostal('2222');
$appartement1->setChambres(1);
$appartement1->setGarage(false);
$appartement1->setPieces(2);


echo $appartement1->getPays() . "<br>";
echo $appartement1->getVille(). "<br>";
echo $appartement1->getCodepostal(). "<br>";
echo $appartement1->getPieces(). "<br>";
echo $appartement1->isGarage(). "<br>";
echo $appartement1->getChambres(). "<br>";