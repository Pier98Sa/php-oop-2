<?php

//includo la classe Giochi nella classe Cucce
require_once __DIR__ . '/Giochi.php';

class Cucce extends Giochi{
    protected $altezza;
    protected $larghezza;

    public function __construct($nome, $sconto, $pezzi , $codiceProdotto ,$materiale, $altezza, $larghezza){
        //valori ripresi dalla classe padre
        parent::__construct($nome, $sconto, $pezzi , $codiceProdotto,$materiale);

        //controllo dell'altezza
        if(is_numeric($altezza)&& $altezza >= 100 && $altezza <= 300){
            $this->altezza = $altezza; 
        }else{
            echo 'Error misura altezza non valida';
        }
        
        //controllo della larghezza
        if(is_numeric($larghezza)&& $larghezza >= 100 && $larghezza <= 300){
            $this->larghezza = $larghezza; 
        }else{
            echo 'Error misura larghezza non valida';
        }
    }

    public function setAltezza($altezza){
        if(is_numeric($altezza)&& $altezza >= 100 && $altezza <= 300){
            $this->altezza = $altezza; 
        }
    }

    public function setLarghezza($larghezza){
        if(is_numeric($larghezza)&& $larghezza >= 100 && $larghezza <= 300){
            $this->larghezza = $larghezza; 
        }
    }
}