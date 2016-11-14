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
    
  public function generateHTML(){
    echo "<html>
            <head>
              <title>PasteBin Clone</title>
            </head>
            <body>
              <h1 style='text-align:center'>Notes</h1>" . $this.showNotes() .
            "<hr>
            <form action=<?php echo htmlentities($_SERVER['PHP_SELF']?> method=post>
              <input type='submit' />
            </form>
            Note:<textarea id='noteArea' rows='6' cols='75' />
            <hr>
            </body>
            </html>";
  }
}
?>
