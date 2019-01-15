<?php

// Traitement du formulaire

$error="";
$display = "none";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST['textSubmit']))
  {
    if (empty($_POST["StringChangeText"]))
    {
      $error = "Veuillez remplir le champ de texte à transformer avant validation";
    }

    else
    {
      if(empty($_POST['getLongText']) && empty($_POST['getMajText']) && empty($_POST['getMinText']) && empty($_POST['getFirstMajText'])&& empty($_POST['getWordsFirstMajText']))
      {
        $error = "Veuillez indiquer les transformations à effectuer";
      }
      else
      {
        $testString = new StringChange($_POST["StringChangeText"]);
        $display = "block";
      }
    }
  }
  elseif(isset($_POST['textReset']))
  {
    unset($_POST);
  }
}
