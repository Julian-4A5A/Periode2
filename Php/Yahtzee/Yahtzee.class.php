<?php
/**
 *
 */
abstract class Yathzee
{
  public $number = 1;

  function __construct()
  {

  }
  public function GetNumber()
  {
     return $this->$number;
  }
  public function rol($Class)
  {
    $this->number = rand(1,6);
    return "<img class='{$Class}' src='icons/delapouite/dice/png/". $this->SetAfbeelding() . "{$this->number}.png'alt=''>";
  }
  abstract protected function SetAfbeelding();
}
/**
 *
 */
class DiseNormal extends Yathzee
{

  protected function SetAfbeelding()
  {
    return "dice-six-faces-";
  }
}
class Dise3Dnumbers extends Yathzee
{

  protected function SetAfbeelding()
  {
    return "perspective-dice-";
  }
}
class Dise3DNormal extends Yathzee
{

  protected function SetAfbeelding()
  {
    return "perspective-dice-six-faces-";
  }
}
