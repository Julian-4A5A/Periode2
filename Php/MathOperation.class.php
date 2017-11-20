<?php

/**
 *
 */
class Sum

{
  protected $number1 = 0;
  protected $number2 = 0;
  protected $result = 0;

  function __construct($one = 0 , $two = 0)
  {
    $this->numberOne = $one;
    $this->numberTwo = $two;
  }
  public function GetNumbers()
  {
    return "Number 1: {$this->numberOne} <br> Number 2: {$this->numberTwo}";
  }
  public function GetResult()
  {
    return $this->result;
  }
  public function AddUp()
  {
    $this->result = ($this->numberOne + $this->numberTwo);
  }


}
/**
 *
 */
class SumSub
{
  protected $number1 = 0;
  protected $number2 = 0;
  protected $result = 0;

  function __construct($one = 0 , $two = 0)
  {
    $this->numberOne = $one;
    $this->numberTwo = $two;
  }
  public function GetNumbers()
  {
    return "Number 1: {$this->numberOne} <br> Number 2: {$this->numberTwo}";
  }
  public function GetResult()
  {
    return $this->result;
  }
  public function AddUp()
  {
    $this->result = ($this->numberOne - $this->numberTwo);
  }

}
/**
 *
 */
class SumMulti
{

  protected $number1 = 0;
  protected $number2 = 0;
  protected $result = 0;

  function __construct($one = 0 , $two = 0)
  {
    $this->numberOne = $one;
    $this->numberTwo = $two;
  }
  public function GetNumbers()
  {
    return "Number 1: {$this->numberOne} <br> Number 2: {$this->numberTwo}";
  }
  public function GetResult()
  {
    return $this->result;
  }
  public function AddUp()
  {
    $this->result = ($this->numberOne * $this->numberTwo);
  }

}


$sum = new Sum(5,5);
$sum->AddUp();
echo $sum->GetResult() . "<br>";

$sum1 = new SumSub(4,76);
$sum1->AddUp();
echo $sum1->GetResult() . "<br>";

$sum2 = new SumMulti(1231231231234567890,5456789021223545);
$sum2->AddUp();
echo $sum2->GetResult() . "<br>";


class MathSum
{

  protected $number1 = 0;
  protected $number2 = 0;
  protected $result = 0;

  public function __construct()
  {

  }
  public function GetResult()
  {
    return $this->result;
  }
  public function GetNumbers()
  {
    return "Number 1: {$this->number1} <br> Number 2: {$this->number2}";
  }
}
class Add  extends MathSum
{

  public function __construct($one, $two)
  {
    $this->number1 = $one;
    $this->number2 = $two;
  }
  public function AddUp()
  {
    $this->result = ($this->number1 + $this->number2);
  }
}
class Sub extends MathSum
{

  function __construct(float $one, float $two)
  {
    $this->number1 = $one;
    $this->number2 = $two;
  }
  public function sub()
  {
    $this->result = ($this->number1 - $this->number2);
  }
}

$sub = new Sub(8,5);
$sub->sub();
echo $sub->GetResult() . "<br>";

$add = new Add(5,5);
$add->AddUp();
echo $add->GetResult() . "<br>";
