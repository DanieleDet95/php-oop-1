<?php
  // Collegamento con la classe user
  require_once(__DIR__ . '/user.php');

  // Utente1
  $utente1 = new User('Daniele','Detommaso','Dany195@hotmail.it');
  $utente1->id = '1';
  $utente1->eta = '25';
  $utente1->dataNascita = '14/09/1995';
  $utente1->sesso = 'Maschio';
  $utente1->cellulare = '3298826230';
  echo 'Utente '. $utente1->getInfo() . '<br><br>';

  // Utente2
  $utente2 = new User('Pippo','Rossi','Pippo87@hotmail.it');
  $utente2->id = '2';
  $utente2->eta = '87';
  $utente2->dataNascita = '14/09/1987';
  $utente2->sesso = 'Maschio';
  $utente2->cellulare = '3294466630';
  echo 'Utente '. $utente2->getInfo() . '<br><br>';

  // Utente3
  $utente3 = new User('Minnie','Verdi','Minnie87@hotmail.it');
  $utente3->id = '3';
  $utente3->eta = '15';
  $utente3->dataNascita = '14/09/2005';
  $utente3->sesso = 'Femmina';
  $utente3->cellulare = '3111111630';
  echo 'Utente '. $utente3->getInfo() . '<br><br>';

?>
