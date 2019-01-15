<!-- Header -->
<?php require_once("../includes/header.php"); ?>

<!-- Titre Page -->
      <div id="menu" class="jumbotron <?= $classTitre ?>" style="margin-bottom:0">
        <?php
          $titre5 = new HeaderPage("Exercice 5", "centre");
          echo $titre5->getTitre();
          echo $titre5->addP("* Paramètres de type objet *");
        ?>
      </div>

<!-- Menu -->
      <?php
        require_once('../includes/menu.php');
      ?>


<!-- Exercice 5 -->

      <!-- Consignes ex 5 -->

      <div class="container <?= $classContainer ?>" style="margin-top:30px">
         <!-- d-flex justify-content-end -->
        <div class="jumbotron <?= $classJumbotron ?>" style="margin:2%">
           <!-- col-xl-9 -->

          <div>
            <h4>Créez une classe <strong>Option</strong> et une autre classe <strong>Menu</strong>.</h4>
            <p>
              <h5>La classe <strong>Option</strong> définira comme propriétés</h5>

              <ul>
                <li>le titre,</li>
                <li>le lien,</li>
                <li>et la couleur d'arrière-plan,</li>
              </ul>
              les méthodes à implémenter seront
              <ul>
                <li>le constructeur</li>
                <li>et le graphe</li>
              </ul>
            </p>

            <p>
              <h5>D'autre part, la classe <strong>Menu</strong></h5>

              <ul>
                <li>gérera un tableau d'objets de la classe Option</li>
                <li>et implémentera</li>
                <ul>
                  <li>une méthode pour insérer les objets de la classe Menu</li>
                  <li>et une autre pour les représenter graphiquement.</li>
                </ul>
              </ul>

              Pour le constructeur de la classe Menu, indiquez si nous voulons que le menu soit
              <ul>
                <li>«horizontal»</li>
                <li>ou «vertical»</li>
              </ul>
            </p>

          </div>

        </div>
      </div>


  <!-- Formulaire -->

      <div class="container <?= $classContainer ?>" style="margin-top:30px">
        <div class="jumbotron <?= $classJumbotron ?>" style="margin:2%">

        <div>
          <h3><strong>Tester</strong></h3>
        </div>

          <p class="text-danger"><?=$error ?></p>

          <form method="post" action="" class="justify-content-center row d-flex text-center">

      <!-- Formulaire orientation du menu -->
              <div class="form-group col-md-4">
                <h4>Orientation du menu</h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="orientation" value="horizontal" id="horizontal" <?php
                    // Mémorisation des valeurs sélectionnées
                    if(empty($_POST['orientation']) || $_POST['orientation'] == "horizontal")
                    {
                      echo "checked";
                    }
                  ?>>
                  <label class="form-check-label" for="horizontal">
                    Horizontal
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="orientation" value="vertical" id="vertical"<?php
                  // Mémorisation des valeurs sélectionnées
                  if(isset($_POST['orientation']) && $_POST['orientation'] == "vertical")
                  {
                    echo "checked";
                  }
                  ?>>
                  <label class="form-check-label" for="vertical">
                    Vertical
                  </label>
                </div>
              </div>

      <!-- Formulaire background color du menu -->
              <div class="col-md-4 form-group">
                <h4>Couleur du menu</h4>

                  <input class="form-check-input" type="color" name="bgColor" <?php
                  // Mémorisation des valeurs sélectionnées
                  if(!empty($_POST['bgColor']))
                  {
                    echo 'value="' . $colorPicker . '"';
                  }
                  else
                  {
                    echo ' value="#343a40" ';
                  }
                  ?> id="bgColor">
              </div>

      <!-- soumission du formulaire -->
              <div class="form-group col-md-4 text-center">
                <button type="submit" class="btn btn-primary" name="menuSubmit">Valider</button>
                <button type="submit" class="btn btn-danger" name="menuReset">Reset</button>
              </div>

          </form>
        </div>

      </div>

<!-- Footer -->
<?php require_once("../includes/footer.php"); ?>
