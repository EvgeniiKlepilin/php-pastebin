<?php
//model.php
class pasteBinModel{
  public $savedNotes = array();
  
  public function updateNotes($conn){
    //select all notes from db
    $sql = $conn->query("SELECT note FROM pastebin");
    //update local array
    if($sql->num_rows > 0){
      while($row = $sql->fetch_assoc()){
        array_push($savedNotes, $row['note']);
      }
    }
    
  }
  
}
?>
