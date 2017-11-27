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

    return '<span class="' . $this->afbeelding . ' ' . $this->character . '"></span>';
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
  protected $character = 'warrick';
  protected $afbeelding = 'league';
  
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
