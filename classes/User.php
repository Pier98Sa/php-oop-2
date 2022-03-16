<?php

class User {
    protected $nome;
    protected $cognome;
    protected $email;
    protected $Indirizzo;
    protected $numeroTelefono;

    public function __construct($nome,$cognome,$email,$Indirizzo,$numeroTelefono){
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

        //controllo dell'email
        if(strpos($email, '@') !== false && strpos($email, '.') !== false){
            $this->email = $email;
        }else{
            echo "Error indirizzo e-mail non valido";
        }

        //contollo dell'indirizzo
        if (is_string($Indirizzo) && strlen($Indirizzo) > 6){
            $this->Indirizzo = $Indirizzo;
        }else{
            echo 'Error Indirizzo non valido';
        }

        //controllo del numero di Telefono
        if (is_numeric($numeroTelefono) && $numeroTelefono > 1000000000){
            $this->numeroTelefono = $numeroTelefono;
        }else{
            echo 'Error numero di telefono non valido';
        }
    }
    
}