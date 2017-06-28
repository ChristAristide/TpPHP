<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestPersonne
 *
 * @author Kouassi Christ
 */

require 'Personne.php';

$moi = new Personne('Kouassi', 'Christ', 'Paris');

$moi->setAdresse('10 rue Morere 75014');

echo $moi->getPersonne();
