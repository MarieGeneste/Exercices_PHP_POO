<?php

abstract class OperationSurCons
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

class SumSurCons extends OperationSurCons
{
  private $title;

  public function __construct($tit, $val1, $val2)
  {
    parent::__construct($val1, $val2);
    $this->title = $tit;
    $this->setResult();
  }

  public function setResult()
  {
    $this->result = $this->title . ($this->value1 + $this->value2);
  }
}

class SoustractionSurCons extends OperationSurCons
{
  private $title;

  public function __construct($tit, $val1, $val2)
  {
    parent::__construct($val1, $val2);
    $this->title = $tit;
    $this->setResult();
  }

  public function setResult()
  {
    $this->result = $this->title . ($this->value1 + $this->value2);
  }
}
