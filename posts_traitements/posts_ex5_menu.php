<?php
// Traitement du formulaire

$dir = "";
$classContainer = '';
$classJumbotron = '';
$classTitre = 'col-12';
$colorPicker = "";
$errorMenu = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  // Gestion orientation menu
  if(isset($_POST['menuSubmit']))
  {
    if (isset($_POST["orientation"]) && $_POST["orientation"] == "vertical")
    {
      $dir = "vertical";
      $classContainer = 'row d-flex justify-content-end col-12"';
      $classJumbotron = 'col-xl-9 col-md-10';
      $classTitre = 'offset-2 col-10';
    }
    else
    {
      $dir = "";
    }

  // Gestion background color du menu

    if (empty($_POST["bgColor"]))
    {
      $errorMenu = "Veuillez sélectionner une couleur avant validation";
    }
    elseif (!preg_match("#^\#[a-zA-Z0-9]{3,6}$#", $_POST["bgColor"]))
    {
      $errorMenu = "Le format de la couleur sélectionnée n'est pas valide.<br />
                La couleur doit être au format exadécimal (ex : #000000)";
    }
    else
    {
      $colorPicker = $_POST["bgColor"];
    }
  }
  elseif(isset($_POST['menuReset']))
  {
    unset($_POST);
    // $colorPicker="";
  }
}


// Instanciation du Menu
$objOption = new Option(["Perso", "Liens", "Header", "Table", "Menu", "Opérations", "String", "Page"],
                        ["Exercice 1", "Exercice 2", "Exercice 3 & 6", "Exercice 4", "Exercice 5", "Exercice 7", "Exercice 8", "Bonus"],
                        ["ex_1_Perso.php", "ex_2_Liens.php", "ex_3.6_Header.php", "ex_4_Table.php", "ex_5_Menu.php", "ex_7_Operations.php", "ex_8_String.php", "bonus_1_Page.php"],
                        $colorPicker);

//Gère l'affichage



$test = new Menu($objOption, $dir);
