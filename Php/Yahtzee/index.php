<?php require 'Yahtzee.class.php'; ?>
<?php
$Yahtzee =  new DiseNormal();
$Normal = $Yahtzee->rol('RollingDiceCup');

$Yahtzee1 =  new Dise3Dnumbers();
$Number3D = $Yahtzee1->rol('RollingDiceCup');

$Yahtzee2 =  new Dise3DNormal();
$normal3D = $Yahtzee2->rol('RollingDiceCup');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
      <img class="RollingDiceCup TopFixed" src="icons/delapouite/dice/png/rolling-dice-cup.png" alt="">
      <div class="">
        <h6>Normal Dice</h6>
        <div class=""><?php echo $Normal; ?> </div>
        <h6>3D dice numbers</h6>
        <div class=""><?php echo $Number3D; ?> </div>
        <h6>Normal dice Number</h6>
        <div class=""><?php echo $normal3D; ?> </div>
      </div>

  </body>
</html>
