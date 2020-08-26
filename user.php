<?php

  // Creazione classe user con varie attributi
  class User {
    public $id;
    public $nome;
    public $cognome;
    public $eta;
    public $dataNascita;
    public $sesso;
    public $email;
    public $cellulare;

    // Implementazione funzione che acquisisce le variabili quando si crea un nuovo user
    public function __construct($nome,$cognome,$email){
      $this->setDate($nome,$cognome,$email);
    }

    // Controllo su variabili
    public function setDate($nome,$cognome,$email){
      if ((!empty($nome))||(!empty($cognome))||(!empty($email))) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
      } else{
        die('Errore nei dati inseriti');
      }
    }

    // Stampa delle info necessarie
    public function getInfo(){
      return 'Id: ' .$this->id .'<br>Nome: '.$this->nome .'<br>Cognome: '.$this->cognome .'<br>Etá: '.$this->eta .'<br>Data di nascita:  '.$this->dataNascita .'<br>Sesso: '.$this->sesso .'<br>Cellulare: '.$this->cellulare;
    }
  }
?>
