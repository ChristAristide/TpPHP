<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'Ville.php';

$maVille = new Ville();
$maVille->setDepartement('Lagune');
$maVille->setNom('Abidjan');
$maVille->affiche();
