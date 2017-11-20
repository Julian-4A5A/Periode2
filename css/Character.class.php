<?php

/**
 *
 */
class Character
{
  protected $character;
  protected $afbeelding;
  protected $link = 'span';
  function __construct()
  {

  }
  public function GetHtml()
  {

    return "<span class='". $this->afbeelding ." ".$this->character . "";
  }
  public function SetCharacter($value)
  {
    $this->character = $value;
  }
  public function SetAfbeelding($value)
  {
    $this->afbeelding = $value;
  }



}
/**
 *
 */
class Warwick extends Character
{

  public function jump()
  {
    echo "jumping";
  }
}
class Lulu extends Character
{
  public function walk()
  {
    echo "walking";
  }
  public function swim()
  {
    echo "swimming";
  }
}
