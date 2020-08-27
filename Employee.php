<?php

  class Employee extends User{
    use TraitSendEmail;
    protected $livello = 'Cadetto';

    public function setlivello($anni_anzianita){
      if ($anni_anzianita > 10) {
        $this->livello = 'Capitano';
      } elseif ($anni_anzianita > 5) {
        $this->livello = 'Ufficiale';
      }
    }
  }

?>
