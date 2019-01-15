<?php

// Traitement du formulaire de création de tableau

$tabTitle="";
$tabDisplay = "none";
$tabPos = "start";
$tabError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST['tabSubmit']))
  {

    if (empty($_POST["titreTab"]))
    {
      $tabError = "Veuillez indiquer le titre du tableau<br/>";
    }
    if(empty($_POST['cols']))
    {
      $tabError .= "Veuillez indiquer le nombre de colonnes<br/>";
    }
    if(empty($_POST['rows']))
    {
      $tabError .= "Veuillez indiquer le nombre de lignes<br/>";
    }

    if($tabError == "")
    {
      $tabTitle = FormsTests::test_input($_POST["titreTab"]);
      $tableTest = new Tableau ($tabTitle, $_POST['cols'], $_POST['rows']);
      $tabDisplay = "block";
      $tabPos = "between";
    }

  }
  elseif(isset($_POST['tabReset']))
  {
    unset($_POST);
    $tabTitle="";
    $tabDisplay = "none";
    $tabPos = "start";
  }
}


// Traitement du formulaire de création de tableau
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST['tabPostSubmit']))
  {
    $postTab = '<table class="table table-bordered text-center">
                  <caption style="caption-side:top" class="text-center"><h2>' . $_POST['tabTitle'] . '</h2></caption>';
    for($i=0; $i < $_POST['nbRows']; $i++)
    {
       $rowP = "row" . $i;
       $postTab .= '<tr>';
       for($k=0; $k < $_POST['nbCols']; $k++)
       {
         $colP = "col" . $k;
         $postName = $rowP . $colP;
         if(!empty($_POST[$postName]))
         {
           $entree = FormsTests::test_input($_POST[$postName]);
         }
         else
         {
           $entree = "";
         }

         if($i == 0)
         {
           $postTab .= '<th>' . $entree . '</th>';
         }
         else
         {
           $postTab .= '<td>' . $entree . '</td>';
         }
       }
       $postTab .= '</tr>';
     }
     $postTab .= '</table>';
     $tabDisplay = "block";
     $tabPos = "between";
  }
  elseif(isset($_POST['tabReset']))
  {
    unset($_POST);
    $postTab="";
    $tabDisplay = "none";
    $tabPos = "start";
  }
}
