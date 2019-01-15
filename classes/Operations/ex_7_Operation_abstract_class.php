<?php

abstract class OperationAbs
{
  abstract public function load1($val1);

  abstract public function load2($val2);

  abstract public function getResult();
}

class SumAbs extends OperationAbs
{
  private $value1;
  private $value2;
  private $result;

  public function load1($val1)
  {
    $this->value1 = $val1;
  }

  public function load2($val2)
  {
    $this->value2 = $val2;
  }

  public function getResult()
  {
    $this->setResult();
    return '<p>' . $this->result . '</p>';
  }

  public function setResult()
  {
    $this->result = $this->value1 + $this->value2;
  }
}

class SoustractionAbs extends OperationAbs
{
  private $value1;
  private $value2;
  private $result;

  public function load1($val1)
  {
    $this->value1 = $val1;
  }

  public function load2($val2)
  {
    $this->value2 = $val2;
  }

  public function getResult()
  {
    $this->setResult();
    echo '<p>' . $this->result . '</p>';
  }

  public function setResult()
  {
    $this->result = $this->value1 - $this->value2;
  }
}
