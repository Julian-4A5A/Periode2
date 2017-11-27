<?php
abstract class MathSum
{

  protected $numbers = [];

  protected $result = 0;

  public function __construct($numbers)
  {
    $this->SetNumbers($numbers);
  }
  public function SetNumbers($value)
  {
    $this->numbers = $value;
  }
  public function GetResult()
  {
    return $this->MathOperation();
  }
  public function GetNumbers()
  {
    return $this->numbers;
  }
  public function MathOperation()
  {
    $this->result = $this->numbers[0];
    for ($i=1; $i < count($this->numbers) ; $i++) {
      $this->result = $this->calc($this->result, $this->numbers[$i]);
    }

    return $this->result;
  }

  abstract protected function calc($result, $number);

}
class Add  extends MathSum
{
  protected function calc($result, $number) {
    return $result + $number;
  }
}
class Sub extends MathSum
{
  protected function calc($result, $number) {
    return $result - $number;
  }
}

$sub = new Sub([5,6,7,9]);
echo $sub->GetResult() . "<br>";

$add = new Add([5,6,7]);
echo $add->GetResult() . "<br>";
