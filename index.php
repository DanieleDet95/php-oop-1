<?php
  // Visualizzare gli errori
  ini_set('display_errors','On');
  error_reporting(E_ALL);

  // Collegamento con la classe user
  require_once(__DIR__ . '/TraitSendEmail.php');
  require_once(__DIR__ . '/User.php');
  require_once(__DIR__ . '/Employee.php');

  // Utenti
  $array_utenti = [
    [
      'nome' => 'Giovanni',
      'cognome' => 'Bianchi',
      'email' => 'Giovy33@gmail.com',
      'password' => '123',
      'eta' => '18',
    ],
    [
      'nome' => 'Antonio',
      'cognome' => 'Rossi',
      'email' => 'Rossy44@gmail.com',
      'password' => '456',
      'eta' => '44',
    ],
    [
      'nome' => 'Francesca',
      'cognome' => 'Verdi',
      'email' => 'Francy66@gmail.com',
      'password' => '789',
      'eta' => '66',
    ]
  ];

  // Stampa di tutti gli utenti
  foreach ($array_utenti as $utente) {
    $user = new User($utente['nome'],$utente['cognome'],$utente['email'],$utente['password'],$utente['eta']);
    $user->canComment();
    $user_data = $user->getDate();

    ?>
      <div>
        <p>User</p>
        <ul>
          <li>Nome: <?php echo $user_data['nome']; ?></li>
          <li>Cognome:<?php echo $user_data['cognome']; ?></li>
          <li>Email: <?php echo $user_data['email']; ?></li>
          <li>Password: <?php echo $user_data['password']; ?></li>
          <li>Etá: <?php echo $user_data['eta']; ?></li>
          <li>Commentare: <?php echo $user_data['commentare']; ?></li>
        </ul>
      </div>
    <?php
  }

  // Utenti
  $array_employee = [
    [
      'nome' => 'Daniele',
      'cognome' => 'Detommaso',
      'email' => 'Dany33@gmail.com',
      'password' => '123',
      'eta' => '25',
    ],
    [
      'nome' => 'Ciccio',
      'cognome' => 'Blu',
      'email' => 'Ciccio44@gmail.com',
      'password' => '456',
      'eta' => '12',
    ],
    [
      'nome' => 'Eros',
      'cognome' => 'Giallo',
      'email' => 'Eros66@gmail.com',
      'password' => '789',
      'eta' => '66',
    ]
  ];

  // Stampa di tutti gli Employee
  foreach ($array_employee as $employer) {
    $employee = new Employee($employer['nome'],$employer['cognome'],$employer['email'],$employer['password'],$employer['eta']);
    $employee->setlivello(6);
    $employee->canComment();
    $employee_data = $employee->getDate();

    ?>
      <div>
        <p>Employee</p>
        <ul>
          <li>Nome: <?php echo $employee_data['nome']; ?></li>
          <li>Cognome:<?php echo $employee_data['cognome']; ?></li>
          <li>Email: <?php echo $employee_data['email']; ?></li>
          <li>Password: <?php echo $employee_data['password']; ?></li>
          <li>Etá: <?php echo $employee_data['eta']; ?></li>
          <li>Commentare: <?php echo $employee_data['commentare']; ?></li>
          <li><?php echo $employee->sendEmail($employee->email,'Conferma mail'); ?></li>
        </ul>
      </div>
    <?php
  }

?>
