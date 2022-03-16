<?php

//includo la classe prodotto nella classe Cibo
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto{
    protected $pesoProdotto;
    protected $tipoCibo;

    public function __construct($nome, $sconto , $pezzi , $codiceProdotto,$pesoProdotto ,$tipoCibo){
        //valori ripresi dalla classe padre
        parent::__construct($nome, $sconto, $pezzi , $codiceProdotto );

        //valori nuovi
        if(is_numeric($pesoProdotto) && $pesoProdotto >= 0){
            $this->pesoProdotto = $pesoProdotto; 
        } else{
            echo 'Error peso errato';
        }
        if (is_string($tipoCibo) && strlen($tipoCibo) > 3){
            $this->tipoCibo = $tipoCibo;
        }else{
            echo 'Error cibo non valido';
        }
        
    }

    public function setPesoProdotto($pesoProdotto){
        if(is_numeric($pesoProdotto) && $pesoProdotto >= 0){
            $this->pesoProdotto = $pesoProdotto; 
        } 
    }

    public function setTipoCibo($tipoCibo){
        if (is_string($tipoCibo) && strlen($tipoCibo) > 3){
            $this->tipoCibo = $tipoCibo;
        }else{
            echo 'Error cibo non valido';
        } 
    }
}