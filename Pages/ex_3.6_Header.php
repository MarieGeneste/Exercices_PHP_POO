<!-- Header -->
<?php require_once("../includes/header.php"); ?>

<!-- Titre Page ex 3 -->
      <div id="menu" <?=$titleBgColor ?> class="jumbotron <?=$classTitre ?>" style="margin-bottom:0">
        <?php
        if(isset($testTitle))
        {
          echo $testTitle->getTitre();
        }
        else
        {
          $titre2 = new HeaderPage("Exercice 3 & 6", "centre");
          echo $titre2->getTitre();
          echo $titre2->addP("* Méthode constructeur d'une classe (__construct)*<br />* Paramètres optionnels *");
        }
        ?>
      </div>

<!-- Menu -->
      <?php
        require_once('../includes/menu.php');
      ?>

<!-- Exercice 3 -->

        <!-- Consignes ex 3 -->

        <div class="container d-flex justify-content-between" style="margin-top:40px">

            <div class="margin0 col-md-6 d-flex row justify-content-center">
            <div class="jumbotron col-md-12">
              <p>

                <h4>Faire une classe <strong>HeaderPage</strong><br />(Ex. 3)</h4>
                <p>
                   qui vous permet d'afficher un titre,<br />
                   indiquez si vous voulez qu'il apparaisse
                   <ul>
                     <li>centré,</li>
                     <li>à droite</li>
                     <li>ou à gauche.</li>
                   </ul>
                   Utilisez un constructeur pour initialiser les deux attributs.
                </p>

              </p>
            </div>

            <div class="jumbotron col-md-12 align-self-center">
              <p>

                <h4>Encodez l' <strong>en-tête</strong> de la page<br />(Ex. 6)</h4>
                <p>
                  qui montre un titre
                  <ul>
                    <li>aligné</li>
                    <li>avec une certaine police</li>
                    <li>et une couleur d'arrière-plan.</li>
                  </ul>
                  Définissez des paramètres facultatifs dans le constructeur pour<br />
                  les couleurs d'alignement de police, d'arrière-plan et de titre.
                </p>

              </p>
            </div>
        </div>

  <!-- Formulaire -->

        <div class="jumbotron col-md-5">

        <div>
          <h3><strong>Changez l'entête de la page !</strong></h3>
        </div>

          <p class="text-danger"><?=$titleError ?></p>

          <form method="post" action="" class="justify-content-center margin0 col-md-12 row d-flex text-center">

      <!-- Formulaire nom du nouveau titre -->
            <div class="form-group col-md-12">
                <label for="titleName"><h5>Changer le titre de la page</h5></label>
                <input type="text" name="titleName" class="form-control" id="titleName" value="<?php
                  if(!empty($_POST["titleName"]))
                  {
                    echo $_POST["titleName"];
                  }
                 ?>">
            </div>

      <!-- Formulaire alignement du titre -->
              <div class="form-group col-md-12">
                <h5>Changer l'alignement du Titre</h5>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="alignement" value="gauche" id="gauche" <?php
                    // Mémorisation des valeurs sélectionnées
                    if(isset($_POST['alignement']) && $_POST['alignement'] == "gauche")
                    {
                      echo "checked";
                    }
                  ?>>
                  <label class="form-check-label" for="gauche">
                    A gauche
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="alignement" value="centre" id="centre"<?php
                  // Mémorisation des valeurs sélectionnées
                  if(empty($_POST['alignement']) || $_POST['alignement'] == "centre")
                  {
                    echo "checked";
                  }
                  ?>>
                  <label class="form-check-label" for="centre">
                    Centré
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="alignement" value="droite" id="droite" <?php
                    // Mémorisation des valeurs sélectionnées
                    if(isset($_POST['alignement']) && $_POST['alignement'] == "droite")
                    {
                      echo "checked";
                    }
                  ?>>
                  <label class="form-check-label" for="droite">
                    A droite
                  </label>
                </div>
              </div>

      <!-- Formulaire background color du titre -->
              <div class="col-md-12 form-group">
                <h5>Changer la couleur d'arrière plan</h5>

                  <input class="form-check-input" type="color" name="bgColor" <?php
                    echo 'value="' . $colorPic .'" ';
                  ?> id="bgColor">
              </div>
      <!-- Formulaire style de police -->
              <div class="form-group col-md-12">
                <label for="fontFamily"><h5>Changer la police de caractères</h5></label>
            <select name="fontFamily" class="form-control" id="fontFamily">
              <option>Bootstrap font</option>
              <option>Dancing Script</option>
              <option>Permanent Marker</option>
              <option>Cinzel</option>
                  <option>Bangers</option>
                  <option>Covered By Your Grace</option>
                  <option>Rock Salt</option>
                </select>
              </div>

      <!-- Formulaire couleur de police -->
              <div class="col-md-12 form-group">
                <h5>Changer la couleur de police</h5>

                  <input class="form-check-input" type="color" name="fontColor" <?php
                    echo 'value="' . $colorPicfont .'" ';
                  ?> id="fontColor">
              </div>

      <!-- soumission du formulaire -->
              <div class=" btnw form-group col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="titleSubmit">Valider</button>
                <button type="submit" class="btn btn-danger" name="titleReset">Reset</button>
              </div>

          </form>
        </div>
      </div>

<!-- Footer -->

<?php require_once("../includes/footer.php"); ?>
