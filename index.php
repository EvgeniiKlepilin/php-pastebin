<?php
//index.php
require_once('connect.php');
require_once('model.php');
require_once('view.php');
require_once('controller.php');

//Creation and initialization of objects
//initialize database connection
$connection = new Database();
$connection.getConnection();
//initialize objects of MVC
$pastebin = new pastebinModel();
$control = new pastebinControl($pastebin);
$view = new pastebinView($pastebin, $control);

if(isset($_POST['noteArea']) && !empty($_POST['noteArea'])){
  $control.updatePastebin($connection, $_POST['noteArea']);
  $view.generateHTML();
} else {
  $view.generateHTML();
}
?>
