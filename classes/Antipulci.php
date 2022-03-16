<?php

//includo la classe prodotto nella classe Antipulce
require_once __DIR__ . '/Prodotto.php';

class Antipulci extends Prodotto{
    protected $disponibilità;

    public function __construct($nome, $sconto = null, $pezzi = null, $codiceProdotto = null){
        //valori ripresi dalla classe padre
        parent::__construct($nome, $sconto, $pezzi , $codiceProdotto );

        
    }
        public function setDisponibilità(){
            if(date("m") >= 05 && date("m") =< 08){
                $this->$disponibilità = "disponibilie";
            }else{
                $this->$disponibilità = "Non disponibilie";
            }
        }
}