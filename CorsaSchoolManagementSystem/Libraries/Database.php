<?php 

require_once('Config/Config.php');

class Database 
{
    private $host = DB_HOST;
    private $name = DB_NAME;
    private $user = DB_USER;
    private $password = DB_PASSWORD;

    private $dbCon;
    private $stmt;

    public function __construct()
    {
        try {
            $this->dbCon = new PDO("mysql:host=$this->host;dbname=$this->name", $this->user, $this->password);
            $this->dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }

    public function query($query)
    {
        try {
            $this->stmt = $this->dbCon->prepare($query);
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }
    }

    public function bind($param, $value, $type = null){
        try {
                if(is_null($type)){
                  switch(true){
                    case is_int($value):
                      $type = PDO::PARAM_INT;
                      break;
                    case is_bool($value):
                      $type = PDO::PARAM_BOOL;
                      break;
                    case is_null($value):
                      $type = PDO::PARAM_NULL;
                      break;
                    default:
                      $type = PDO::PARAM_STR;
                  }
                }
          $this->stmt->bindValue($param, $value, $type);
        } catch (Throwable $e) {
                echo  "Binding error: ". $e->getMessage(); 
        }
      }

    public function execute()
    {
        try {
            $this->stmt->execute();
        } catch (PDOException $e) {
            echo "Execution failed: " . $e->getMessage();
        }
    }

    public function resultSet()
    {
        try{
            $this->execute();
          return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            echo "Fetch failed: " . $e->getMessage();
        }
      }

      public function single()
    {
        try{
            $this->execute();
          return $this->stmt->fetch(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            echo "Fetch failed: " . $e->getMessage();
        }
      }
}