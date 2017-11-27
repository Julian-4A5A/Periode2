<?php

/**
 *
 */
abstract class User
{
  private $username;
  private $passwordWith;
  private $role;

  function __construct($user, $pass)
  {
    $this->username = $user;
    $this->passwordWith = $this->encryptIt($pass);


  }
  public function GetUser()
  {
    return $this->username;
  }
  public function Getpas()
  {

    return $this->passwordWith;
  }
  public function changePW($passN)
  {
    $passN = $this->encryptIt($passN);
    if ($passN == $this->passwordWith) {
      return "Je wacht woord is het zelfde";
    }
    else {
      $this->passwordWith = $passN;
      return "PW is change";
    }
  }
  public function ControlUser($user, $pass)
{
  $passN = $this->encryptIt($pass);
    var_dump($this->passwordWith);
    var_dump($passN);

    if ($this->username === $user && $this->passwordWith === $passN) {

      return true;
    }else {
      return false;
    }
  }

  private  function encryptIt( $q ) {
    $qEncoded      = md5($q);
    return( $qEncoded );
}

  abstract public function DoStuf();
/**
 *
 */


}
class Normal extends User
{

  public function DoStuf()
  {
    # code...
  }
}
class Supervisor extends User
{

  public function DoStuf()
  {
    # code...
  }
}
