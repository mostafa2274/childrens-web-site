<?php
include_once('constants.php');
class database {
    private $Type = type;
    private $username = user;
    private $password = pass;
    private $dbhost = host;
    private $database = name;

    function __construct() {
   	$this->pdo = new PDO($this->Type . ":host=" . $this->dbhost . ";dbname=" . $this->database, $this->username,
   	$this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
     }
      public function getRow($query, $params=array())
     	   {
                $stmt = $this->pdo->prepare($query);
                $stmt->execute($params);
                return $stmt->fetch();
           }
      	public function getRows($query, $params=array()){
      	        $stmt = $this->pdo->prepare($query);
                $stmt->execute($params);
                return $stmt->fetchAll();
            }
        public function insertRow($query, $params){
                $stmt = $this->pdo->prepare($query);
                $stmt->execute($params);
                return $stmt->rowCount();
              }

        public function updateRow($query, $params){
            return $this->insertRow($query, $params);
        }
        public function deleteRow($query, $params){
            return $this->insertRow($query, $params);
        }
        public function Execute($query){
             return $this->pdo->exec($query);
           }

}
$db = new database;
?>

