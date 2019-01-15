<?php

class Option
{
  private $title;
  private $tooltip;
  private $link;
  private $bgColor;
  private $onglets = array();

  // Setters

  public function __construct($titre, $info, $lien, $couleur="")
  {
    $this->title = $titre;
    $this->tooltip = $info;
    $this->link = $lien;
    if(!empty($couleur))
    {
      $this->bgColor = 'style="background-color:' . $couleur . '!important"';
    }
  }

  public function getBgColor()
  {
    return $this->bgColor;
  }

  public function getOptions()
  {
    for($i=0; $i<count($this->title); $i++)
    {
      if(is_dir('Pages/'))
      {
        $this->onglets[] = '<li class="nav-item"><a class="nav-link" data-toggle="tooltip" data-placement="top" title="' . $this->tooltip[$i] . '" href="Pages/' . $this->link[$i] .'">' . $this->title[$i] . '</a></li>';
      }
      else
      {
        $this->onglets[] = '<li class="nav-item"><a class="nav-link" data-toggle="tooltip" data-placement="top" title="' . $this->tooltip[$i] . '" href="' . $this->link[$i] .'">' . $this->title[$i] . '</a></li>';
      }

    }
    return $this->onglets;
  }
}
