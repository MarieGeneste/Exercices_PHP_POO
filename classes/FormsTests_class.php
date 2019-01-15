<?php

class FormsTests
{
  // Transforme les couleurs hexadecimales en RGB
  public static function hex2rgb($color)
  {
    list($r, $g, $b) = sscanf($color, "#%02x%02x%02x");
    return 'rgba(' . $r .', ' . $g .', ' . $b . ', 0.2)';
    }

  // Fonction de nettoyage des données
  public static function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

}



class validiTests
{
  private $post;
  private static $errors = array();
  private $validation = true;

  public function securString($name)
  {
    // Tests données envoyées en POST
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      // Test si le champ formulaire Nom est rempli
      if (empty($_POST["$name"]))
      {
        $error = "Veuillez remplir le champ ' . $name . ' avant validation";
        $this->setErrors($error);
        $validation = false;
      }
      else
      {
        // Nettoyage et affectation du Nom
        $this->post = test_input($_POST["$name"]);
      }
    }
    else
    {
      $error = "Une erreur inconnue est survenue";
      $this->setErrors();
    }
  }

  public function setErrors($error)
  {
    $this->$errors[] = $error;
  }

  public static function afficheErrors($error)
  {
    for ($i = 0; $i > count($this->$errors); $i++)
    {
      echo '<p>' . $this->$errors[$i] . '</p>';
    }
  }

  public static function getErrors()
  {
    return $this->$errors;
  }

  // Fonction de nettoyage des données
  public static function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
}
