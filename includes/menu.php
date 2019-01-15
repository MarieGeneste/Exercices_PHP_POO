
<?php
if(is_dir('../classes/'))
{
  require_once('../classes/ex_5_Menu_class.php');
  require_once('../classes/ex_5_Option_class.php');
}
else
{
  require_once('classes/ex_5_Menu_class.php');
  require_once('classes/ex_5_Option_class.php');
}
?>

<!-- Menu (ex 5) -->

<?php

echo $test->getGraph();

?>
