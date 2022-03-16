<?php
//classe base di ogni prodotto
class Prodotto{
    public $nome;
    protected $sconto;
    protected $pezzi;
    protected $codiceProdotto;

    //costruttore che richiede di base il nome
    public function __construct($nome, $sconto = null, $pezzi = null, $codiceProdotto = null ){
        $this->nome = $nome;
        $this->sconto = $sconto;
        $this->pezzi = $pezzi;
        $this->codiceProdotto = $codiceProdotto;
    }

    //funzione per inserire il codice prodotto
    public function setCodiceProdotto($codiceProdotto){
        if(is_numeric($codiceProdotto) && $codiceProdotto >= 0){
            $this->codiceProdotto = $codiceProdotto; 
        }
    }

    //funzione per inserire il numero di prezzi
    public function setPezzi($pezzi){
        if(is_numeric($pezzi) && $pezzi >= 0){
            $this->pezzi = $pezzi; 
        }
    }

    //funzione per inserire lo sconto sul prodotto
    public function setSconto($sconto){
        if(is_numeric($sconto) && $sconto >= 0){
            $this->sconto = $sconto;  
        }
        
    }
}