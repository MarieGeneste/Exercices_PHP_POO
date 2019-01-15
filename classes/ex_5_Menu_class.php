<?php

require_once('ex_5_Option_class.php');

class Menu
{
  private $menu = [];
  private $bgColor;
  protected $direction;
  private $graph;
  private $accueil;
  private $ajustements = [];

  public function __construct($objOption, $position='')
  {
    $this->menu = $objOption->getOptions();
    $this->bgColor = $objOption->getBgColor();
    $this->setDirection($position);
    $this->setGraph();
  }

  protected function setDirection($position)
  {
    if($position == 'vertical')
    {
      $this->direction = 'navbar-nav flex-column';
      $this->ajustements[] = 'col-xl-2 col-md-3 menuFixe ';
    }
    else
    {
      $this->direction = 'navbar-nav';
      $this->ajustements[] = '';
      $this->ajustements[] = '';
    }
  }

  private function setGraph()
  {
    $this->graph = '<nav ' . $this->bgColor . ' class="';
    if(isset($this->getAjustements()[0]))
    {
        $this->graph .= $this->getAjustements()[0];
    }

    $this->graph .=  'sticky-top navbar navbar-expand-sm bg-dark navbar-dark">
                      <a class="navbar-brand" href="' . $this->getAccueil() . '">Accueil</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                        <div class="';

    if(isset($this->getAjustements()[1]))
    {
        $this->graph .= $this->getAjustements()[1];
    }

    $this->graph .= ' collapse navbar-collapse" id="collapsibleNavbar">
                      <ul class="' . $this->getDirection() . '">';

    for($i=0; $i<count($this->menu); $i++)
    {
      $this->graph .= $this->menu[$i];
    }

    $this->graph .= '</ul></div></nav>';
  }

  public function getAjustements()
  {
    return $this->ajustements;
  }

  public function getAccueil()
  {
    if(is_dir('Pages/'))
    {
      $this->accueil = 'index.php';
    }
    else
    {
      $this->accueil = '../index.php';
    }
    return $this->accueil;
  }

  public function getDirection()
  {
     return $this->direction;
  }

  public function getGraph()
  {
    return $this->graph;
  }
}

if(is_dir('../classes/'))
{
require_once("../posts_traitements/posts_ex5_menu.php");
}
else
{
require_once("posts_traitements/posts_ex5_menu.php");
}
