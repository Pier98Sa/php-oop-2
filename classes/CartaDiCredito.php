<?php

class CartaDiCredito{
    protected $nome;
    protected $cognome;
    protected $numeroCarta;
    protected $meseScadenza;
    protected $annoScadenza;
    protected $cvc;
    protected $valid;

    public function __construct($nome,$cognome,$numeroCarta,$meseScadenza,$annoScadenza,$cvc ){
        
        //controllo del nome
        if (is_string($nome) && strlen($nome) > 3){
            $this->nome = $nome;
        }else{
            echo 'Error nome non valido';
        }

        //contollo del cognome
        if (is_string($cognome) && strlen($cognome) > 3){
            $this->cognome = $cognome;
        }else{
            echo 'Error cognome non valido';
        }

        //controllo del numero della carta
        if (is_numeric($numeroCarta) && $numeroCarta > 1000000000000000){
            $this->numeroCarta = $numeroCarta;
        }else{
            echo 'Error numero di carta non valido';
        }

        //controllo del mese di scadenza

        if(is_numeric($meseScadenza) && $meseScadenza >= 1 && $meseScadenza <= 12 ){
            $this->meseScadenza = $meseScadenza;
        }else{
            echo 'Error mese non valido';
        }

        //controllo dell' anno di scadenza
        if(is_numeric($annoScadenza) && $annoScadenza >= 0 && $annoScadenza < 100 ){
            $this->annoScadenza = $annoScadenza;
        }else{
            echo 'Error anno non valido';
        }

        //controllo del cvc

        if(is_numeric($cvc) && $cvc >= 1 && $cvc < 1000){
            $this->cvc = $cvc;
        }else{
            echo 'Error cvc non valido ';
        }  

        try{
            $this->isExpired($meseScadenza,$annoScadenza);
        } catch(Exception $e){
            echo $e->getMessage();
        }
        //var_dump($e);
        
    }

    //validazione della carta di credito
    public function isExpired($meseScadenza,$annoScadenza){
        if($meseScadenza >= idate("m")){   //se mese maggiore uguale del mese corrente
            if($annoScadenza >= idate("y")){//se anno maggiore uguale del mese corrente
                $this->valid = 'carta valida'; 
            }else{
                throw new Exception('La Carta di credito è scaduta');
                $this->valid = 'carta scaduta';   
            }
        }elseif($meseScadenza < idate("m")){ //se mese minore del mese corrente
            if($annoScadenza > idate("y")){//se anno maggiore uguale del mese corrente
                $this->valid = 'carta valida';
            }else{
                throw new Exception('La Carta di credito è scaduta');
                $this->valid = 'carta scaduta';
            }
        }
    }

    //altro tipo di validazione usare la DateTime
}