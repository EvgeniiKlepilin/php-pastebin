<?php
//index.php

//Creation and initialization of objects
//initialize database connection
$connection = new Database();
$connection->getConnection();
//initialize objects of MVC
$pastebin = new pastebinModel();
$control = new pastebinControl($pastebin);
$view = new pastebinView($pastebin, $control);

if(isset($_POST['noteArea']) && !empty($_POST['noteArea'])){
  $control->updatePastebin($connection, $_POST['noteArea']);
  $view->generateHTML();
} else {
  $view->generateHTML();
}
?>
