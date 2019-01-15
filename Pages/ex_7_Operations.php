<?php
if(is_dir('../classes/'))
{
  require_once("../classes/Operations/ex_7_Operation_abstract_class.php");
  require_once("../classes/Operations/ex_bonus_3_Operation_surConstruct_class.php");
  require_once("../classes/Operations/ex_bonus_2_Operation_surMeth_class.php");
}
else
{
  require_once("classes/Operations/ex_7_Operation_abstract_class.php");
  require_once("classes/Operations/ex_bonus_3_Operation_surConstruct_class.php");
  require_once("classes/Operations/ex_bonus_2_Operation_surMeth_class.php");
}
?>

<!-- Header -->
<?php require_once("../includes/header.php"); ?>

<!-- Titre Page -->
      <div id="menu" class="jumbotron <?=$classTitre ?>" style="margin-bottom:0">
        <?php
          $titre1 = new HeaderPage("Exercice 7", "centre");
          echo $titre1->getTitre();
          echo $titre1->addP("* Classe abstract *");
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

            <h4>Créez une classe <em>abstraite</em> appelée <strong>Operation</strong></h4>
            <p>
              qui définit comme propriétés
              <ul>
                <li>$value1,</li>
                <li>$value2,</li>
                <li>$result</li>
              </ul>
              et définissez comme méthodes
              <ul>
                <li>load1 (initialise la propriété $value1),</li>
                <li>load2 (initialise la propriété $value2)</li>
                <li>et enfin une méthode affichant le contenu de $résultat</li>
              </ul>
            </p>
            <h4>Définissez ensuite <strong>deux sous-classes</strong> de la classe <strong>Operation</strong></h4>
            <h5>Le premier sous-class "<strong>Sum</strong>"</h5>
            <p>
              qui vise à
              <ul>
                <li>charger deux valeurs,</li>
                <li>à les sommer</li>
                <li>et à afficher le résultat.</li>
              </ul>
            </p>
            <h5>Le deuxième sous-class "<strong>Soustraction</strong>"</h5>
            <p>
              qui vise à
              <ul>
                <li>charger deux valeurs,</li>
                <li>à les soustraire</li>
                <li>et à afficher le résultat de la différence.</li>
              </ul>
            </p>


<!-- Resultat exercice 7 avec class ABSTRACT -->

              <?php

              $objSumAbs = new SumAbs();
              $objSumAbs->load1(10);
              $objSumAbs->load2(80);
              echo $objSumAbs->getResult();

              $objSousAbs = new SoustractionAbs();
              $objSousAbs->load1(60);
              $objSousAbs->load2(20);
              echo $objSousAbs->getResult();

              $objSumCons = new SumSurCons('60 + 20 = ',60, 20);
              echo $objSumCons->getResult();

              $objSousCons = new SoustractionSurCons('60 - 20 = ',60, 20);
              echo $objSousCons->getResult();

              $objSumMeth = new SumSurMeth(60, 20);
              echo $objSumMeth->getResult();

              $objSousMeth = new SoustractionSurMeth(60, 20);
              echo $objSousMeth->getResult();

              ?>


          </p>
        </div>
      </div>


<!-- Footer -->
<?php require_once("../includes/footer.php"); ?>
