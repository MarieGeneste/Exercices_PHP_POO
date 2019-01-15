<?php

// Traitement du formulaire de création de liens dans le titre

$align = "centre";
$menuColor = '#e9ecef';
$BgColor = '#e9ecef';
$colorPic = '#e9ecef';
$titleBgColor = '#e9ecef';
$colorPicfont = '#343a40';
$titleError = "";
$postTitle = "";
$fonth1_2 = "";
$fontFamily = "";
$fontColor = '#212529';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  // Gestion alignement titre
  if(isset($_POST['titleSubmit']))
  {
    if(!empty($_POST["titleName"]))
    {
      if(strlen($_POST["titleName"]) < 40)
      {
        $postTitle = FormsTests::test_input($_POST["titleName"]);
      }
      else
      {
        $titleError = "Votre titre doit comporter moins de 40 caractères";
      }
    }
    else
    {
      $postTitle = "* Méthode constructeur d'une classe (__construct)*<br />* Paramètres optionnels *";
    }
    if (isset($_POST["alignement"]) && $_POST["alignement"] == "gauche")
    {
      $align = "gauche";
    }
    elseif (isset($_POST["alignement"]) && $_POST["alignement"] == "droite")
    {
      $align = "droite";
    }
    elseif (empty($_POST["alignement"]) || $_POST["alignement"] == "centre")
    {
      $align = "centre";
    }

  // Gestion background color du titre

    if (empty($_POST["bgColor"]))
    {
      $errorTitle = "Veuillez sélectionner une couleur avant validation";
    }
    else
    {
      $colorPic = $_POST["bgColor"];
      $BgColor = FormsTests::hex2rgb($_POST["bgColor"]);
      $menuColor = str_replace('0.2','0.6', FormsTests::hex2rgb($_POST["bgColor"]));
      $titleBgColor = 'style="background-color:'. $BgColor .'"';
    }

  // Gestion de la police

    if(isset($_POST['fontFamily']) && $_POST['fontFamily'] != 'Bootstrap font')
    {
      $fonth1_2 = "font-family: '" . $_POST['fontFamily'] . "', cursive;";
      $fontFamily = "font-family: 'Lato', sans-serif;";
    }
    else
    {
      $fonth1_2 = "";
      $fontFamily = "";
    }

  // Gestion font-color du titre

      if (empty($_POST["fontColor"]))
      {
        $errorTitle = "Veuillez sélectionner une couleur avant validation";
      }
      else
      {
        $colorPicfont = $_POST["fontColor"];
      }

    if($titleError == "")
    {
      $testTitle = new Header("Exercice 3 & 6",$postTitle, "$align");
    }
  }
  elseif(isset($_POST['titleReset']))
  {
    unset($_POST);
    $align = "centre";
    $colorPic = '#e9ecef';
    $titleError = "";
    $fonth1_2 = "";
    $fontFamily = "";
  }
}
