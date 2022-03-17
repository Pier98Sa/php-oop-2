<?php

//includo la classe prodotto nella classe Antipulce
require_once __DIR__ . '/Prodotto.php';

class Antipulci extends Prodotto{
    protected $disponibilità ;

    public function __construct($nome,$prezzo, $sconto, $pezzi, $codiceProdotto){
        //valori ripresi dalla classe padre
        parent::__construct($nome,$prezzo, $sconto, $pezzi , $codiceProdotto );

        //richiamo della funzione per la disponibilità
        try{
            $this->setDisponibilità();
        }catch(Exception $m){
            echo $m->getMessage();
        }
        
    }

    //funzione per la disponibilità
    public function setDisponibilità(){
        if(idate("m") >= 5 && idate("m") <= 8){
            $this->disponibilità = "disponibile";
        }else{
            throw new Exception('Il prodotto non è disponibile');
            $this->disponibilità = "Non disponibile";
        }
    }

            
}