<?php include  'Character.class.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    $warrick = new Warwick;
    $warrick->SetCharacter('warrick');
    $warrick->SetAfbeelding('league');
    echo $warrick->GetHtml();
    $warrick->walk();
    $warrick->jump();
    $Lulu = new Lulu;
    $Lulu->swim();-
    ?>
  </body>
</html>
