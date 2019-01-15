<?php

//HeaderPage Exercice 3

class HeaderPage
{
  private $titres;
  private $positions;
  private $header;

  public function __construct($titre, $position)
  {
    $this->titres = $titre;
    $this->positions = $position;
  }

  public function getTitre()
  {
    switch($this->positions)
    {
      case 'gauche': $this->positions = 'text-left'; break;
      case 'centre': $this->positions = 'text-center'; break;
      case 'droite': $this->positions = 'text-right'; break;
      default: echo 'le paramètre de position saisi n\'est pas valide !<br/>Paramètres acceptés : "centre", "droite" ou "gauche".';
      exit; break;
    }

    return '<strong><h1 class="' . $this->positions . '">' . $this->titres . '</h1></strong>';
  }

  public function addP($text)
  {
    return '<h2 class="' . $this->positions . '">' . $text . '</h2>';
  }
}

//Header Exercice 6

class Header
{
  private $titres;
  private $align;
  private $header;
  private $pText;

  public function __construct($titre, $addP="", $postAlign="centre")
  {
    $this->titres = $titre;
    $this->pText = $addP;
    $this->setAlignement($postAlign);
  }

  public function setAlignement($alignRecup)
  {
    switch($alignRecup)
    {
      case 'gauche': $this->align = 'text-left'; break;
      case 'centre': $this->align = 'text-center'; break;
      case 'droite': $this->align = 'text-right'; break;
      default: echo 'le paramètre de postAlign saisi n\'est pas valide !<br/>Paramètres acceptés : "centre", "droite" ou "gauche".';
      exit; break;
    }
  }

  public function getTitre()
  {
    $title = '<strong><h1 class="' . $this->align . '">' . $this->titres . '</h1></strong>';
    if(!empty($this->pText))
    {
      $title .= '<h2 class="' . $this->align . '">' . $this->pText . '</h2>';
    }
    return $title;
  }
}



if(is_dir('../classes/'))
{
require_once("../posts_traitements/posts_ex3.6_header.php");
}
else
{
require_once("posts_traitements/posts_ex3.6_header.php");
}
