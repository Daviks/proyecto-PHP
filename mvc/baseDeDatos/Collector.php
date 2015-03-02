<?php
include_once('dataBase.php');
// Define configuration
define("DB_HOST", "127.0.0.1");
define("DB_USER", "root");
<<<<<<< HEAD
define("DB_PASS", "");
define("DB_NAME", "crazzyfood");

=======
define("DB_PASS", "Estud1ante");
define("DB_NAME", "CrazzyFood");
>>>>>>> origin/master


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
	
  }

}

?>
