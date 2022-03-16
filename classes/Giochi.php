<?php

//includo la classe prodotto nella classe giochi
require_once __DIR__ . '/Prodotto.php';

class Giochi extends Prodotto{
    protected $materiale;

    public function __construct($nome, $sconto = null, $pezzi = null, $codiceProdotto = null,$materiale = null){
        //valori ripresi dalla classe padre
        parent::__construct($nome, $sconto, $pezzi , $codiceProdotto);

        //valori nuovi
        $this->materiale = $materiale;
    }

    public function setMateriale($materiale){
        if(is_string($materiale) && strlen($materiale) > 2){
            $this->materiale = $materiale; 
        }
    }
}