<?php

class Tableau
{
  private $colonnes;
  private $rangees;
  private $titre;
  public $entrees = array();
  private $donnees = array();
  private $tab;

  public function __construct($nom, $cols, $rows)
  {
    $this->colonnes = $cols;
    $this->rangees = $rows;
    $this->titre = strtoupper($nom);
    $this->tableTrace();
  }

  public function tableTrace()
  {
    $this->tab = '<form method="post" action="" class="text-center">
                  <table class="table table-bordered text-center">
                  <caption style="caption-side:top" class="text-center"><h2>' . $this->titre . '</h2></caption>';

    for($j=0; $j < $this->rangees; $j++)
    {
       $this->tab .= '<tr>';
       for($k=0; $k < $this->colonnes; $k++)
       {
         $this->donnees[] = $k;
         if($j == 0)
         {
           $this->tab .= '<th><input type="text" class="form-control" placeholder="titre ' . $j . '"';
         }
         else
         {
           $this->tab .= '<td><input type="text" class="form-control" placeholder="Ligne ' . $j . ' - Col. ' . $k . '"';
         }
         $this->tab .= ' id="row' . $j . 'col' . $k . '" name="row' . $j . 'col' . $k . '">';

         if($j == 0)
         {
           $this->tab .= '</th>';
         }
         else
         {
           $this->tab .= '</td>';

         }
       }
       $this->tab .= '</tr>';
     }
     $this->tab .= '</table>
                    <button name="tabPostSubmit" type="submit" class="btn btn-primary">Enregistrer</button>
                    <input type="hidden" name="nbCols" id="nbCols" value="' . $this->colonnes . '" />
                    <input type="hidden" name="nbRows" id="nbRows" value="' . $this->rangees . '" />
                    <input type="hidden" name="tabTitle" id="tabTitle" value="' . $this->titre . '" />
                    </form>';
     return $this->tab;
  }

}

if(is_dir('../classes/'))
{
require_once("../posts_traitements/posts_ex4_table.php");
}
else
{
require_once("posts_traitements/posts_ex4_table.php");
}
