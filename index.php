<?php

require_once __DIR__ . '/classes/CartaDiCredito.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Cucce.php';
require_once __DIR__ . '/classes/Giochi.php';

$carta1 = new CartaDiCredito("Pierluigi", "La Rocca", 8000800080008000,04,24,666);
var_dump($carta1);

$ScatoloCibo1 = new Cibo("Simba", '',25,001,250,"Carne di Manzo");
var_dump($ScatoloCibo1);

$Cuccia1 = new Cucce("Croci Villa", 5, 10, 005, 'legno', 255,300);
var_dump($Cuccia1);

$Gioco1 = new Giochi("Trixie",15,75,007,'plastica');
var_dump($Gioco1);
