<?php

  // Creazione classe user con varie attributi
  class User {
    public $nome;
    public $cognome;
    public $email;
    protected $password;
    public $eta;
    protected $commentare = 'No';

    // Implementazione funzione che acquisisce le variabili quando si crea un nuovo user
    public function __construct($nome,$cognome,$email,$password,$eta){
      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->email = $email;
      $this->password = $password;
      $this->eta = $eta;
    }

    // Stampa delle info necessarie
    public function getDate(){
      return [
        'nome' => $this->nome,
        'cognome' => $this->cognome,
        'email' => $this->email,
        'password' => $this->password,
        'eta' => $this->eta,
        'commentare' => $this->commentare,
      ];
    }

    // Criptare Password
    public function setPassword($password){
      $password_criptata = $this->criptaPassword();
      $this->password = $password_criptata;
    }

    private function criptaPassword(){
      // Cripta password
    }

    // Condizione se puó commentare o no
    public function canComment(){
      if ($this->eta > 20) {
        $this->commentare = 'Si';
      }
    }

  }
?>
