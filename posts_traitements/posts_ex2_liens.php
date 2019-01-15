<?php

// Traitement du formulaire de création de liens dans le menu

$exercices = new LiensExercices;
$exercices->setLien("Perso", "ex_1_Perso.php");
$exercices->setLien("Liens", "ex_2_Liens.php");
$exercices->setLien("Header", "ex_3.6_Header.php");
$exercices->setLien("Table", "ex_4_Table.php");
$exercices->setLien("Menu", "ex_5_Menu.php");
$exercices->setLien("Opérations", "ex_7_Operations.php");
$exercices->setLien("String", "ex_8_String.php");
$exercices->setLien("Page", "bonus_1_Page.php");

$linkName = '';
$linkExt = '';
$linkError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST['linkSubmit']))
  {
    if (isset($_POST["linkPostName"]))
    {
      $linkName = FormsTests::test_input($_POST["linkPostName"]);
      if (isset($_POST["linkPostExt"]))
      {
        $linkExt = FormsTests::test_input($_POST["linkPostExt"]);
        $exercices->setPostLien($linkName, $linkExt);
      }
      else
      {
        $exercices->setPostLien($linkName);
      }
    }
    elseif(strlen($_POST["linkPostName"]) > 14)
    {
      $linkError = "Le nom de votre lien doit être inférieur à 14 caractères";
    }
    else
    {
      $linkError = "Veuiller renseigner le nom du nouveau lien à ajouter au menu";
    }
  }
  elseif(isset($_POST['linkReset']))
  {
    unset($_POST);
    $linkName = '';
    $linkExt = '';
    $linkError = '';
  }
}
