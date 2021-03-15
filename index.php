<?php

require_once 'User.php';
require_once 'Blogger.php';


$user_1 = new User('jkd123lkj');
$user_1->nome = 'Mario';
$user_1->cognome = 'Rossi';
$user_1->dataDiNascita = '1998-12-23';
$user_1->username = 'MarioBros98';
$user_1->email = 'mario.rossi@gmail.com';
$user_1->password = 'MarioMario98';

$user_2 = new Blogger('adss89798kjhn', 'Il blog più bello del mondo');
$user_2->nome = 'Franco';
$user_2->cognome = 'Neri';
$user_2->dataDiNascita = '1972-04-08';
$user_2->username = 'Il blogger più bravo del mondo';
$user_2->email = 'franco.nari@hotmail.com';
$user_2->password = 'francofranco72';

$user_2->setSubsriptions(123000);
$subscriptions = user_2->getSubsriptions();

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

  <div class="user">
    <h2>
      <?php echo 'Nome Utente: '. $user_1->nome. ''. $user_1->cognome ?>
    </h2>
    
    <h3>
      <?php echo 'Username: '. $user_1->username ?>
    </h3>
    
    <h3>
      <?php echo 'ID Utente: '. $user_1->id ?>
    </h3>
  </div>

  <div class="blogger">
    <h2>
      <?php echo 'Nome Blog: '. $user_2->blogName ?>
    </h2>
    
    <h3>
      <?php echo 'Username: '. $user_2->username ?>
    </h3>

    <h3>
      <?php echo 'Numero di iscritti: '. $user_2->subscriptions ?>
    </h3>
  </div>

</body>
</html>

