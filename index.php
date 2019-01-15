<!-- Header -->
<?php require_once("includes/header.php"); ?>


<!-- Titre Page -->
      <div class="jumbotron <?=$classTitre ?>" style="margin-bottom:0">
        <?php
            $titre = new HeaderPage("EXERCICES", "centre");
            echo $titre->getTitre();
            echo $titre->addP("* * *");
        ?>
      </div>

<!-- Menu -->
      <?php require_once('includes/menu.php');?>

<!-- Footer -->
<?php require_once("includes/footer.php"); ?>
