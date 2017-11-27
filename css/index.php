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
    $warrick = new Warwick();
    echo $warrick->GetHtml();

    ?>
  </body>
</html>
