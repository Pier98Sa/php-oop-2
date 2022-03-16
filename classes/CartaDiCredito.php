<?php

class CartaDiCredito{
    protected $nome;
    protected $cognome;
    protected $numeroCarta;
    protected $meseScadenza;
    protected $annoScadenza;
    protected $cvc;

    public function __construct($nome,$cognome,$numeroCarta,$meseScadenza,$annoScadenza,$cvc ){
        
        //controllo del nome
        if (is_string($nome) && strlen($nome) > 3){
            $this->nome = $nome;
        }else{
            echo 'Error';
        }

        //contollo del cognome
        if (is_string($cognome) && strlen($cognome) > 3){
            $this->cognome = $cognome;
        }else{
            echo 'Error';
        }

        //controllo del numero della carta
        if (is_numeric($numeroCarta) && $numeroCarta > 1000000000000000){
            $this->numeroCarta = $numeroCarta;
        }else{
            echo 'Error';
        }

        //controllo del mese di scadenza

        if(is_numeric($meseScadenza) && $meseScadenza >= date("m") + 1 ){
            $this->meseScadenza = $meseScadenza;
        }else{
            echo 'Error';
        }

        //controllo dell' anno di scadenza
        if(is_numeric($annoScadenza) && $annoScadenza >= date("y") ){
            $this->annoScadenza = $annoScadenza;
        }else{
            echo 'Error';
        }

        //controllo del cvc

        if(is_numeric($cvc) && $cvc >= 001 ){
            $this->cvc = $cvc;
        }else{
            echo 'Error';
        }
        
    }
}