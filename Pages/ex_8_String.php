<!-- Header -->
<?php require_once("../includes/header.php"); ?>

<!-- Titre Page -->
      <div id="menu" class="jumbotron <?=$classTitre ?>" style="margin-bottom:0">
        <?php
          $titre1 = new HeaderPage("Exercice 8", "centre");
          echo $titre1->getTitre();
          echo $titre1->addP("* Méthodes statiques d'une classe *");
        ?>
      </div>

<!-- Menu -->
      <?php
        require_once('../includes/menu.php');
      ?>

<!-- Exercice 1 -->

    <!-- Consigne ex 1 -->

      <div class="container" style="margin-top:30px">
        <div class="jumbotron" style="margin:2%">
          <p>

            <h4>Créez une classe <strong>String</strong></h4>
            <p>
              contenant un ensemble de méthodes statiques pour
              <ul>
                <li>calculer le nombre de caractères,</li>
                <li>convertir en majuscules,</li>
                <li>convertir en minuscules,</li>
                <li>etc.</li>
              </ul>
            </p>

          </p>
        </div>
      </div>


  <!-- Formulaire -->

      <div class="container" style="margin-top:30px">
        <form  method="post" action="" class="jumbotron row d-flex" style="margin:2%">
          <div class="col-md-12">
            <h3><strong>Tester</strong></h3>
          </div>

            <div class="jumbotron col-md-6">

              <div class="form-group">
                <label for="StringChange"><h4>Entrez votre texte à modifier</h4></label>
                <textarea class="form-control" id="StringChange" name="StringChangeText" rows="3"><?php
                if (isset($_POST["StringChangeText"]))
                { echo $_POST["StringChangeText"]; }
                ?></textarea>
                <p class="text-danger"><?=$error ?></p>
              </div>

            </div>

            <div class="jumbotron col-md-6">


              <div class="form-group">

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="getLongText" id="getLong" <?php
                  if(isset($_POST['getLongText']))
                  {
                    echo 'checked="checked"';
                  }
                  ?>/>
                  <label class="form-check-label" for="getLong">
                    Obtenir la <strong>longueur</strong> du texte
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="getMajText" id="getMaj"<?php
                  if(isset($_POST['getMajText']))
                  {
                    echo 'checked="checked"';
                  }
                  ?>/>
                  <label class="form-check-label" for="getMaj">
                    Transformer le text en <strong>majuscule</strong>
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="getMinText" id="getMin" <?php
                  if(isset($_POST['getMinText']))
                  {
                    echo 'checked="checked"';
                  }
                  ?>/>
                  <label class="form-check-label" for="getMin">
                    Transformer le text en <strong>minuscule</strong>
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="getFirstMajText" id="getFirstMaj" <?php
                  if(isset($_POST['getFirstMajText']))
                  {
                    echo 'checked="checked"';
                  }
                  ?>/>
                  <label class="form-check-label" for="getFirstMaj">
                    Mettre la <strong>première lettre</strong> du texte text en <strong>majuscule</strong>
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="getWordsFirstMajText" id="getWordsFirstMaj" <?php
                  if(isset($_POST['getWordsFirstMajText']))
                  {
                    echo 'checked="checked"';
                  }
                  ?>/>
                  <label class="form-check-label" for="getWordsFirstMaj">
                    Mettre la <strong>première lettre de chaque mots</strong> du texte en <strong>majuscule</strong>
                  </label>
                </div>

              </div>

              <button type="submit" class="btn btn-primary" name="textSubmit">Valider</button>
              <button type="submit" class="btn btn-danger" name="textReset">Reset</button>
            </div>

          </form>
      </div>


  <!-- Affichage résultat -->

      <div style="display:<?=$display ?>" class="container" style="margin-top:30px">
        <div class="jumbotron row" style="margin:2%">
          <div class="col-md-12">
            <h3><strong>Résultat</strong></h3>
          </div>
            <div class="row justify-content-around align-items-center col-md-12">

              <div class="text-center col-md-2"><?php
                if(isset($_POST['getLongText']))
                {
                  echo '<h6><strong>Nombre de caractères :</strong></h6>';
                  echo $testString->getLong();
                }
                ?>
              </div>

              <?php
              if(isset($_POST['getMajText']) || isset($_POST['getMinText']) || isset($_POST['getFirstMajText']) || isset($_POST['getWordsFirstMajText']))
              {
                echo '  <fieldset class="col-md-9 row d-flex justify-content-around align-items-center">
                    <legend><strong>Texte transformé :</strong></legend>';
              ?>
              <div><?php

                if(isset($_POST['getMajText']))
                {
                  echo $testString->getMaj();
                }

                if(isset($_POST['getMinText']))
                {
                  echo $testString->getMin();
                }
                ?>
              </div>

              <div><?php
                if(isset($_POST['getFirstMajText']))
                {
                  echo $testString->getFirstMaj();
                }

                if(isset($_POST['getWordsFirstMajText']))
                {
                  echo $testString->getWordsFirstMaj();
                }
                ?>
              </div>
            <?php } ?>
          </fieldset>
        </div>
      </div>


<!-- Footer -->
<?php require_once("../includes/footer.php"); ?>
