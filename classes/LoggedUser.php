<?php

//includo la classe user nella logged user
require_once __DIR__ . '/User.php';

class LoggedUser extends User{
    protected $sconto = 20;

    public function __construct($nome,$cognome,$email,$Indirizzo,$numeroTelefono){
        //valori ripresi dalla classe padre
        parent::__construct($nome,$cognome,$email,$Indirizzo,$numeroTelefono);
    }
}