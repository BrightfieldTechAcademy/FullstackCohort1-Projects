<?php 

class Database 
{
    private $host = 'localhost';
    private $name = 'csms';
    private $user = 'root';
    private $password = 'oli@MEN2018';

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

    public function bind($param, $value, $type = null)
    {
        try {
            if(is_null($type)){
                switch ($type) {
                    case is_int($type):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($type):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($type):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                        break;
                }

            }
            $this->stmt->bindValue($param, $value, $type);
        } catch (PDOException $e) {
            echo "Bind failed: " . $e->getMessage();
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