<?php

/**
 * [Person description]
 */
class Person
{
  public $name;
  public $age;
  private $gender;
  public $agePref;
  function __construct($SetName,$SetAge,$SetGender)
  {
    $this->name = $SetName;
    $this->age = $SetAge;
    $this->gender = $SetGender;
  }
  public function MakeName($SetName)
  {
    $this->$name = $SetName;
  }
  public function ShowInfo()
  {
    if ($this->gender == 'm') {
      $ShowZin = "Dit is {$this->name} en zijn leeftijd is {$this->age}.";
    }elseif($this->gender == 'v') {
      $ShowZin = "Dit is {$this->name} en haar leeftijd is {$this->age}.";
    };
    return $ShowZin . "<br>";
  }
  public function SetAge($SetAge)
  {
    if ($SetAge >= 0 and $SetAge <= 150)  {
        $this->age = $SetAge;
    }

  }
  public function AgeController()
  {
    if ($this->age >= 18) {
      $this->agePref = true;
    }
    else {
     $this->agePref = false;
    }
  }
}
//main bind_textdomain_codeset
