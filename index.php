<?php

require_once __DIR__ . '/classes/CartaDiCredito.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Cucce.php';
require_once __DIR__ . '/classes/Antipulci.php';
require_once __DIR__ . '/classes/Giochi.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/LoggedUser.php';

// carta di credito
$carta1 = new CartaDiCredito("Pierluigi", "La Rocca", 8000800080008000,04,24,666);
var_dump($carta1);

// cibo
$ScatoloCibo1 = new Cibo("Simba", '',25,001,250,"Carne di Manzo");
var_dump($ScatoloCibo1);

//cuccia
$Cuccia1 = new Cucce("Croci Villa", 5, 10, 005, 'legno', 255,300);
var_dump($Cuccia1);

//gioco
$Gioco1 = new Giochi("Trixie",15,75,007,'plastica');
var_dump($Gioco1);

//antipulce
$Antipulce1 = new Antipulci("Seresto",12,51,015);
var_dump($Antipulce1);

//user ospite
$UserOspite1 = new User("Luigi","Rossi","luigirossi@email.it", "Via corso 2",3405745600);
var_dump($UserOspite1);

//user logged
$UserLogged1 = new LoggedUser("Luca","Scovotto","lucascovotto@email.it","Via corso 3",3405745601);
var_dump($UserLogged1);
