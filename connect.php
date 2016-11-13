<?php
class Database{

  //credentials - can be stored in a separate file and then included
  $host = "localhost";
  $username = "root";
  $password = "pAzzW0rd";
  $dbname = "pastebin";

  //connect to database
  try{
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $error){
    echo $error->getMessage();
  }
}
?>
