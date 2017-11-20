<?php
require_once 'Person.Class.php';
/**
 *
 */
class Car
{
  private $Color = "black";
  private $Company;
  private $Type;
  private $Fuel;
  public $ShowInfoCar;
  private $Person;
  function __construct($SetColor, $SetType, $SetFuel,$name, $age, $gender)
  {
    $this->Person = new Person($name, $age, $gender);
    $this->Color = $SetColor;
    $this->Type = $SetType;
    $this->Fuel = $SetFuel;
  }
  public function SetComany($value)
  {
    $this->Company = $value;
  }
  public function ShowInfo($ShowInfoString, $sustainable)
  {
    $ShowString = "";
    foreach ($ShowInfoString as $key => $value) {
      $ShowString .= "$value: ".$this->$value . "<br>";
    }
    $ShowString .= $this->sustainable($sustainable);

    $this->ShowInfoCar = $ShowString;
  }
  public function sustainable($sustainable)
  {
    if (in_array($this->Fuel, $sustainable) ){
      $Duurzaam = "The "."<span style='color:{$this->Color};'>{$this->Color}</span>". " " .$this->Company. " " . $this->Type." does run durable on: " . $this->Fuel;
    }else {
      $Duurzaam = "The "."<span style='color:{$this->Color};'>{$this->Color}</span>". " " .$this->Company. " " . $this->Type." does not run durable on: " . $this->Fuel;
    }
    Return $Duurzaam ;

  }
  public function GetColor()
  {
    return $this->Color;
  }
  public function SetColor($SetColor)
  {
    if ($SetColor == "red" || $SetColor == "blue" || $SetColor == "green" ) {
      $this->Color = $SetColor;
    }else {
      $this->Color = "Undifined";
    }
  }
  public function AbleToDrive()
  {
    $this->Person->AgeController();
    if ($this->Person->agePref == true) {
      return "{$this->Person->name} is allowed to drive a car";
    }else {
      return "{$this->Person->name} isn't allowed to drive a car";
    }
  }

}
