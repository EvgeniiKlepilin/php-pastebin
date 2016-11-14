<?php
//view.php
class pastebinView{
  private $model;
  private $controller;
  
  public function __construct($model, $controller){
    $this->model = $model;
    $this->controller = $controller;
  }
  
  public function showNotes(){
    foreach($this->model->savedNotes as $note){
      echo "<p>" . $note . "</p>";
  }
}
?>
