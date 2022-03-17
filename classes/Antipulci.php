<?php

//includo la classe prodotto nella classe Antipulce
require_once __DIR__ . '/Prodotto.php';

class Antipulci extends Prodotto{
    protected $disponibilità ;

    public function __construct($nome, $sconto, $pezzi, $codiceProdotto){
        //valori ripresi dalla classe padre
        parent::__construct($nome, $sconto, $pezzi , $codiceProdotto );

        //richiamo della funzione per la disponibilità
        $this->setDisponibilità();
        
    }

    //funzione per la disponibilità
    public function setDisponibilità(){
        if(idate("m") >= 5 && idate("m") <= 8){
            $this->disponibilità = "disponibilie";
        }else{
            $this->disponibilità = "Non disponibile";
        }
    }

            
}