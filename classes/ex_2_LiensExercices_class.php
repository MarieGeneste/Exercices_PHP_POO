<?php

class LiensExercices
{

  private $liens= array();
  private $link;
  private $popover;

  public function getLien($test)
    {
      echo '<ul class="' . $test->getDirection() . '">';

        foreach($this->liens as $nomLien => $value)
        {
          $listeLiens = '<li class="nav-item"><a class="nav-link" href="' . $value. '">' . $nomLien . '</a></li>';
          echo $listeLiens;
        }
        if (!empty($this->link))
        {
          $postsLiens = '<li class="nav-item"><a class="nav-link" title="Pas la peine de cliquer..." data-toggle="popover" data-trigger="hover" data-content="' . $this->popover . '" href="#">' . $this->link . '</a></li>';
          echo $postsLiens;
        }

      echo '</ul>';
    }

    public function setLien($nom, $nouveauLien)
    {
      $this->liens += [$nom => $nouveauLien];
      return $this->liens;
    }

    public function setPostLien($lien, $postLien)
    {
      $this->getPopover($postLien);
      $this->link = $lien;
      return $this->link;
    }

    private function getPopover($postLien)
    {
      if($postLien == "")
      {
        $this->popover = "T'as pas mis de lien ! \n (Banane ! XD)";
      }
      else
      {
        $retourLien = "[" . $postLien . "]";
        $this->popover = "J'ai censuré ton lien !
                          Tu croyais quand même pas que j'allais te laisser pourrir mon menu... XD
                          Allez j'suis sympa je te le rend : " .
                          $retourLien .
                          " Et désolée s'il n'est plus valide j'ai dû le nettoyer...";
      }
    }

    public function getAccueil()
    {
      echo '<a class="navbar-brand" href="index.php">Accueil</a>';
    }
}
if(is_dir('../classes/'))
{
require_once("../posts_traitements/posts_ex2_liens.php");
}
else
{
require_once("posts_traitements/posts_ex2_liens.php");
}
