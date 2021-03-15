<?php

class User {
  public $id;
  public $nome;
  public $dataDiNascita;
  public $nazionalita;
  public $username;
  public $email;
  public $password;

  public function __construct($_id) {
    $this->id = $_id;
  }
}

$user_1 = new User('jkd123lkj');
$user_1->nome = 'Mario';
$user_1->cognome = 'Rossi';
$user_1->dataDiNascita = '1998-12-23';
$user_1->username = 'MarioBros98';
$user_1->email = 'mario.rossi@gmail.com';
$user_1->password = 'MarioMario98';

$user_2 = new User('adss89798kjhn');
$user_2->nome = 'Franco';
$user_2->cognome = 'Neri';
$user_2->dataDiNascita = '1972-04-08';
$user_2->username = 'FrancoNeri72';
$user_2->email = 'franco.nari@hotmail.com';
$user_2->password = 'francofranco72';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h2>
  <?php echo 'Nome Utente: '. $user_1->nome. ''. $user_1->cognome ?>
</h2>

<h3>
  <?php echo 'Username: '. $user_1->username ?>
</h3>

<h3>
  <?php echo 'ID Utente: '. $user_1->id ?>
</h3>
  
</body>
</html>
