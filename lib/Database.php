    <?php
    include 'config/config.php';
    Class Database{
     public $host   = DB_HOST;
     public $user   = DB_USER;
     public $pass   = DB_PASS;
     public $dbname = DB_NAME;
     
     
     public $connection;
     public $error;
     
     public function __construct(){
      $this->connectDB();
     }
     
    private function connectDB(){
     $this->connection = new mysqli($this->host, $this->user, $this->pass, 
      $this->dbname);
     if(!$this->connection){
       $this->error ="Connection fail".$this->connection->connect_error;
      return false;
     }
     }
     
    public function select($query){
      $result = $this->connection->query($query);
      if($result->num_rows > 0){
        return $result;
      } else {
        return false;
      }
     }
     
  public function insert($query){
    $insert_row = $this->connection->query($query) or die($this->connection->error.__LINE__);
      if($insert_row){
        return $insert_row;
      } else {
      return false;
    }
  }
  
      
     public function update($query){
     $update_row = $this->connection->query($query);
     if($update_row){
      return $update_row;
     } else {
      return false;
      }
     }
      
     public function delete($query){
     $delete_row = $this->connection->query($query);
     if($delete_row){
       return $delete_row;
     } else {
       return false;
      }
     }
     
    }