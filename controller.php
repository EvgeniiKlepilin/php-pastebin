<?php
//controller.php
class pasteBinControl{
  private $model;
  
  public function __construct($model){
    $this->model = $model;
  }
  
  public function updatePastebin($conn, $newNote){
    //insert new note into db
    $sql = $conn->prepare("INSERT INTO pastebin (note) VALUES (:newNote)";
    $sql->bindParam(:newNote, $newNote);
    $sql->execute();
  }
}
?>
