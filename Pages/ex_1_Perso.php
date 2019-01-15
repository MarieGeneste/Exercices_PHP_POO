<!-- Header -->
<?php require_once("../includes/header.php"); ?>

<!-- Titre Page -->
      <div id="menu" class="jumbotron <?=$classTitre ?>" style="margin-bottom:0">
        <?php
          $titre1 = new HeaderPage("Exercice 1", "centre");
          echo $titre1->getTitre();
          echo $titre1->addP("* Déclaration d'une classe et création d'un objet *");
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

            <h4>Créez une classe <strong>Personne</strong></h4>
            <p>
              Définissez un attribut où votre nom est stocké.<br />
              Puis définissez deux méthodes,
              <ul>
                <li>une qui charge le nom</li>
                <li>et une autre qui l’imprime.</li>
              </ul>
            </p>

          </p>
        </div>
      </div>

    <!-- Pratique ex 1 -->

      <div class="container" style="margin-top:30px">
        <div class="jumbotron" style="margin:2%">
          <p>
            <?php

              $quelqun = new Personne;
              $quelqun->setNom("Marie");
              echo $quelqun->getNom();

            ?>
          </p>
        </div>
      </div>


<!-- Footer -->
<?php require_once("../includes/footer.php"); ?>
