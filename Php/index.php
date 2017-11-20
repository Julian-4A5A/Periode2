<?php require_once 'Car.class.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <label>Car</label><br>
      <input type="text" name="Company" value="" required placeholder="Company"><br>
      <input type="text" name="Type" value="" placeholder="TypeCar" required><br>
      <input type="text" name="Color" value="" placeholder="ColorCar" required><br>
      <select class="" name="Fuel">
        <option value="Electric">Electric</option>
        <option value="Hybrid">Hybrid</option>
        <option value="Petrol">Petrol</option>
        <option value="Gas">Gas</option>
      </select><br>
      <label>Person</label><br>
      <input type="text" name="Name" value="" required placeholder="Firstname and lastname"><br>
      <input type="number" name="Age" value="" min="0" max="150" required><br>
      <select class="" name="Gender" required>
        <option value="m">Male</option>
        <option value="v">Female</option>
      </select><br>
      <input type="submit" name="Send" value="Send">
    </form>
  </body>
</html>
<?php
if (isset($_POST['Send'])) {
  $Ford = new Car($_POST['Color'],$_POST['Type'], $_POST['Fuel'],$_POST['Name'], $_POST['Age'], $_POST['Gender']);
  $Ford->SetComany($_POST['Company']);
  $array = ["Color","Company", "Type", "Fuel"];
  $sustainableArray = ['Electric', 'Hybrid'];
  $Ford->ShowInfo($array, $sustainableArray);


  echo $Ford->ShowInfoCar;
  echo "<br>";
  echo $Ford->AbleToDrive();
}else {
  echo "Please fill in the formulier!";
}
