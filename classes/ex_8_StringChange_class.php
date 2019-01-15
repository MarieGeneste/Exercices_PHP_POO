<?php

class StringChange
{
  private $text;

  public function __construct($texte)
  {
    $this->text = $this->test_input($texte);
  }

  public function getLong()
  {
    return '<p><em>' . strlen($this->text) . '</em></p>';
  }

  public function getMaj()
  {
    return '<p><em>' . strtoupper($this->text) . '</em></p>';
  }

  public function getMin()
  {
    return '<p><em>' . strtolower($this->text) . '</em></p>';
  }

  public function getFirstMaj()
  {
    return '<p><em>' . ucfirst($this->text) . '</em></p>';
  }

  public function getWordsFirstMaj()
  {
    return '<p><em>' . ucwords($this->text) . '</em></p>';
  }

  private function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  public function __destruct(){}

}

if(is_dir('../classes/'))
{
require_once("../posts_traitements/posts_ex8_string.php");
}
else
{
require_once("posts_traitements/posts_ex8_string.php");
}
