<!-- Header -->
<?php require_once("../includes/header.php"); ?>

<!-- Titre Page -->
      <div id="menu" class="jumbotron <?=$classTitre ?>" style="margin-bottom:0">
        <?php
        $titre2 = new HeaderPage("Exercice 2", "centre");
        echo $titre2->getTitre();
        echo $titre2->addP("* Attributs d'une classe *");
        ?>
      </div>

<!-- Menu -->
        <nav class="
        <?php if(isset($test->getAjustements()[0]))
        {
            echo $test->getAjustements()[0];
        } ?>
        sticky-top navbar navbar-expand-sm bg-dark navbar-dark">
          <a class="navbar-brand" href="../index.php">Accueil</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="
            <?php if(isset($test->getAjustements()[1]))
            {
                echo $test->getAjustements()[1];
            } ?>
            collapse navbar-collapse" id="collapsibleNavbar">

<!-- Exercice 2 -->

              <?php

              $exercices->getLien($test);

              ?>

            </div>
        </nav>


        <!-- Consignes ex 2 -->

        <div class="container" style="margin-top:30px">
          <div class="margin0 col-12 d-flex row justify-content-between">
          <div class="jumbotron align-self-start col-md-6" style="margin:2%">
            <p>

              <h4>Implémentez une classe <strong>LiensExercices</strong></h4>
              <p>
                qui affiche une liste de liens hypertexte horizontalement<br />
                (essentiellement un menu d'options)
              </p>

            </p>
          </div>

          <div class="jumbotron col-md-5 justify-content-center " style="margin:2%">
            <div>
              <h3><strong>Tester</strong></h3>
              <h4>Ajouter un lien au menu</h4>
            </div>

            <form method="post" action="" class="text-center">
              <div style="margin-top:30px">
                <div class="form-group align-self-end col-md-12">
                  <label for="linkPostName">Intitulé du lien </label>
                  <input type="text" name="linkPostName" class="form-control" id="linkPostName" value="<?php
                  if(!empty($_POST["linkPostName"]))
                  {
                    echo $_POST["linkPostName"];
                  }
                  ?>">
                  <p class="text-danger"><?=$linkError ?></p>
                </div>
                <div class="form-group align-self-end col-md-12">
                  <label for="linkPostExt">Votre lien :</label>
                  <input type="text" name="linkPostExt" class="form-control" id="linkPostExt" value="<?php
                  if(!empty($_POST["linkPostExt"]))
                  {
                    echo $_POST["linkPostExt"];
                  }
                  ?>">
                </div>
              </div>

              <button type="submit" name="linkSubmit" class="btn btn-primary col-md-12">Ajouter</button>
              <button type="submit" class="btn btn-danger col-md-12" name="linkReset">Reset</button>

            </form>

          </div>
        </div>

      </div>

<!-- Footer         -->

<?php require_once("../includes/footer.php"); ?>
