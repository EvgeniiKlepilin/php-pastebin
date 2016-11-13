<?php
class Database{
  private static $connection = NULL;
  
  public function getConnection(){
    //credentials - can be stored in a separate file and then included
    $host = "localhost";
    $username = "root";
    $password = "pAzzW0rd";
    $dbname = "pastebin";

    //connect to database
    try{
      if(!isset($connection)){
        $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      return $this->connection;
    } catch(PDOException $error){
      echo $error->getMessage();
    }
  }

  
}
?>
