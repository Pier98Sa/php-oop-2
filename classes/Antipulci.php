<?php

//includo la classe prodotto nella classe Antipulce
require_once __DIR__ . '/Prodotto.php';

class Antipulci extends Prodotto{
    protected $disponibilità ;

    public function __construct($nome, $sconto, $pezzi, $codiceProdotto){
        //valori ripresi dalla classe padre
        parent::__construct($nome, $sconto, $pezzi , $codiceProdotto );

        $this->setDisponibilità();
        
    }
    public function setDisponibilità(){
        if(date("m") >= '5' && date("m") <= '8'){
            $this->disponibilità = "disponibilie";
        }else{
            $this->disponibilità = "Non disponibile";
        }
    }

            
}