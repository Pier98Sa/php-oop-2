<?php

//includo la classe prodotto nella classe Cibo
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto{
    protected $pesoProdotto;
    protected $tipoCibo;

    public function __construct($nome, $sconto = null, $pezzi = null, $codiceProdotto = null,$pesoProdotto = null,$tipoCibo){
        //valori ripresi dalla classe padre
        parent::__construct($nome, $sconto, $pezzi , $codiceProdotto );

        //valori nuovi
        $this->pesoProdotto = $pesoProdotto;
        $this->tipoCibo = $tipoCibo;
    }

    public function setPesoProdotto($pesoProdotto){
        if(is_numeric($pesoProdotto) && $pesoProdotto >= 0){
            $this->pesoProdotto = $pesoProdotto; 
        } 
    }
}