<?php require_once 'User.class.php'; ?>
<?php
  $user = new Normal('Julian', '1234');
  $user->Dostuf();
  $user->changePW("12345");
  echo $user->Getpas();

  $new = $user->ControlUser('Julian','12345');
  var_dump($new);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
