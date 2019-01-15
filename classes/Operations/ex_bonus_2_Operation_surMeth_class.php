<?php

abstract class OperationSurMeth
{
  protected $value1;
  protected $value2;
  protected $result;

  public function __construct($val1, $val2)
  {
    $this->value1 = $val1;
    $this->value2 = $val2;
  }

  public function getResult()
  {
    return '<p>' . $this->result . '</p>';
  }
}

class SumSurMeth extends OperationSurMeth
{
  public function __construct($val1, $val2)
  {
    parent::__construct($val1, $val2);
    $this->setResult();
  }

  public function setResult()
  {
    $this->result = $this->value1 + $this->value2;
  }
  public function getResult()
  {
    return '<p>La somme de ' . $this->value1 .' et ' . $this->value2 . ' est égale à : ' . $this->result . '</p>';
  }
}

class SoustractionSurMeth extends OperationSurMeth
{
  public function __construct($val1, $val2)
  {
    parent::__construct($val1, $val2);
    $this->setResult();
  }

  public function setResult()
  {
    $this->result = $this->value1 + $this->value2;
  }
  public function getResult()
  {
    return '<p>La soustraction de ' . $this->value1 .' par ' . $this->value2 . ' est égale à : ' . $this->result . '</p>';
  }
}
