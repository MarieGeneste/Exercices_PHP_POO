<!-- Header -->
<?php require_once("../includes/header.php"); ?>

<!-- Titre Page -->
      <div id="menu" class="jumbotron <?=$classTitre ?>" style="margin-bottom:0">
        <?php
          $titre4 = new HeaderPage("Exercice 4", "centre");
          echo $titre4->getTitre();
          echo $titre4->addP("* Visibilité (public - privé) *");
        ?>
      </div>

<!-- Menu -->
      <?php
        require_once('../includes/menu.php');
      ?>

<!-- Exercice 4 -->



      <div class="container" style="margin-top:30px">
        <div class="jumbotron" style="margin:2%">
          <p>
            <h4>Créez une classe <strong>Table</strong></h4>
            <p>
              qui vous permet d'indiquer dans le constructeur
              <ul>
                <li>le nombre de lignes</li>
                <li>et de colonnes</li>
              </ul>
              Définissez une autre méthode qui consiste à charger une donnée dans une ligne et une colonne données.<br />
              Enfin, vous devez afficher les données dans un tableau HTML.<br />
              Définissez la visibilité (privé et public) pour les propriétés et les méthodes.
            </p>
          </p>
        </div>

<!-- Formulaire de création de tableau -->
        <div class="container row d-flex justify-content-<?=$tabPos ?>" style="margin-top:30px">
            <div class="jumbotron row d-flex justify-content-center col-md-2" style="margin:2%">
              <div>
                <h3><strong>Tester</strong></h3>
              </div>
              <form method="post" action="" class="row text-center">
                  <div class="form-group  align-self-end  col-md-12">
                      <label for="titreTab">Titre du tableau : </label>
                      <input type="text" name="titreTab" class="form-control" id="titreTab" value="<?php
                        if(!empty($_POST["titreTab"]))
                        {
                          echo $_POST["titreTab"];
                        }
                        if(!empty($_POST['tabTitle']))
                        {
                          echo $_POST['tabTitle'];
                        }
                       ?>">
                       <p class="text-danger"><?=$tabError ?></p>
                  </div>

                  <div class="form-group align-self-end  col-md-12">
                    <label for="cols">Nombre de colonnes</label>
                    <select name="cols" class="form-control" id="cols" value="5">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                    </select>
                  </div>

                  <div class="form-group align-self-end  col-md-12">
                    <label for="rows">Nombre de lignes</label>
                    <select name="rows" class="form-control" id="rows">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                    </select>
                  </div>
              <div class="form-group  align-self-end  col-md-12">
                <button type="submit" name="tabSubmit" class="btn btn-primary col-md-12">Créer un tableau</button>
                <button type="submit" class="btn btn-danger  col-md-12" name="tabReset">Reset</button>
              </div>
              </form>

          </div>

<!-- Affiche le tableau -->
        <div style="display:<?=$tabDisplay ?>" class="col-md-9 align-self-center text-center" style="margin-top:30px">
              <h3><strong>Résultat</strong></h3>
              <div class="justify-content-around align-items-center">

                <?php
                if(isset($tableTest) && !empty($tableTest))
                {
                  echo $tableTest->tableTrace();
                }
                if(isset($postTab) && !empty($postTab))
                {
                  echo $postTab;
                }
                ?>

              </div>
        </div>

      </div>

    </body>
  </html>
