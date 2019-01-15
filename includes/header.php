<?php
if(is_dir('../classes/'))
{
  require_once("../classes/FormsTests_class.php");
  require_once("../classes/ex_3.6_HeaderPage_class.php");
  require_once('../classes/ex_5_Option_class.php');
  require_once('../classes/ex_5_Menu_class.php');
  require_once("../classes/ex_2_LiensExercices_class.php");
  require_once("../classes/ex_1_Personne_class.php");
  require_once("../classes/ex_4_Tableau_class.php");
  require_once("../classes/ex_8_StringChange_class.php");
}
else
{
  require_once("classes/FormsTests_class.php");
  require_once("classes/ex_3.6_HeaderPage_class.php");
  require_once('classes/ex_5_Option_class.php');
  require_once('classes/ex_5_Menu_class.php');
  require_once("classes/ex_2_LiensExercices_class.php");
  require_once("classes/ex_1_Personne_class.php");
  require_once("classes/ex_4_Tableau_class.php");
  require_once("classes/ex_8_StringChange_class.php");
}
?>

<!DOCTYPE html>
  <html lang="fr">

    <head>
      <title>Exercices POO</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php
      if(is_dir('../includes/'))
      {
        echo "../includes/exercices.css";
      }
      else
      {
        echo "includes/exercices.css";
      }?>
      ">

      <link href="https://fonts.googleapis.com/css?family=Bangers|Cinzel|Covered+By+Your+Grace|Dancing+Script|Lato|Permanent+Marker|Rock+Salt" rel="stylesheet">

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <style>

        body
        {
          <?= $fontFamily ?>
        }

        h1, h2
        {
          <?= $fonth1_2 ?>
          color: <?= $colorPicfont?>;
        }


        .navbar-dark .navbar-nav .nav-link
        {
          color: <?=$menuColor ?>!important;
        }
        .navbar-dark .navbar-nav .nav-link:hover
        {
          color: white!important;
        }


        .jumbotron
        {
          background-color: <?=$BgColor ?>;
          color: <?= $colorPicfont?>;
        }

      </style>

    </head>


    <body>
