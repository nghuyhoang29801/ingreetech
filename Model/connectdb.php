<?php
  /**
   * Phat Mai 21-07-2022
   * this is a class help to manipulate with database.
   */

  require_once __DIR__ . '/../Common/backend/parseENV.php'; 
  (new DevCoder\DotEnv(__DIR__ . '/../private/.env'))->load();  // this step is load env variable.

 
  
  define('DB_SERVER_ADDRESS',getenv('DB_SERVER'));  // this step simply to define parameter for connection.
  define('DB_NAME',getenv('DB_NAME')); // database name.
  define('DB_SERVER_PORT',getenv('DB_SERVER_PORT'));  // this step simply to define parameter for connection.
  define('DB_USERNAME',getenv('DB_USERNAME'));
  define('DB_PASS',getenv('DB_SERVER_PASS'));

  class DB_Manipulation{
    
    // property definition
    private $db_Address;
    private $db_Name;
    private $db_Port;
    private $db_User;
    private $db_Pass;
    private $conn;

    // method definition.
    /**
     * constructor of this class.
     */
    public function __construct(){
      $this->db_Address = DB_SERVER_ADDRESS;
      $this->db_Name = DB_NAME;
      $this->db_Port = DB_SERVER_PORT ?? '';
      $this->db_User = DB_USERNAME;
      $this->db_Pass = DB_PASS ?? '';
      $this->conn = null;
      $this->init();
    }
    /**
     * get_connection: return real conn object of database.
     */
    public function & get_connection(){
      return $this->conn;
    }

    /**
     * init: create connect to database.
     * @return (bool: true)
     */
    public function init(){
      if(!isset($_ENV['DB_CONNECTING'])|| !$_ENV['DB_CONNECTING'] || is_null($this->conn)){
        // create connection to database with property.
        $this->conn = new mysqli($this->db_Address,$this->db_User,$this->db_Pass,$this->db_Name,$this->db_Port);
        $_ENV['DB_CONNECTING'] =false;
        // check connection
        if($this->conn->connect_error){
          die("Connection to databse server failed: ".$this->conn->connect_error);
        }else{
          // echo "Connect to database successfully";
          $_ENV['DB_CONNECTING'] =true;
        }
  
      }
      return true;
    }

    /**
     * getDB_Address is getter of db_address property.
     * @return address of database server.
     */
    public function getDB_Address(){
      return $this->db_Address;
    }

    /**
     * setDB_Address is setter of DB_Address property
     * @param (string) $db_address is database address 
     * @return void.
     */
    public function setDB_Address(string $db_address)
    {
      $this->db_Address = $db_address;
    }

    /**
     * getDB_User is getter of db_User property.
     * @return username of database.
     */
    public function getDB_User():string
    {
      return $this->db_User;
    }

    /**
     * setDB_User is setter of db_username property
     * @param (string) $username is username to connect to server database.
     * @return void.
     */
    public function setDB_User(string $username)
    {
      $this->db_User = $username;
    }

    /**
     * getDB_Pass is getter of db_pass property
     * @return (string) password of database.
     */
    public function getDB_Pass()
    {
      return $this->db_Pass;
    }

    /**
     * setDB_Pass is setter of db_pass property
     * @param (string) $password is password of databse.
     * @return void.
     */
    public function setDB_Pass(string $password)
    {
      $this->db_Pass = $password;
    }

    /**
     * closeConnection: close connect to database
     * @return (bool:true).
     */
    public function closeConnection(){
      
      if( isset($_ENV['DB_CONNECTING'])&& $_ENV['DB_CONNECTING']&& !is_null($this->conn)){
        $this->conn->close();
        $this->conn= null;
        $_ENV['DB_CONNECTING']=false;
        // echo 'connection to DB closed ok!';
      }
      return true;
    }

    public function __destruct()
    {
      $this->closeConnection();
    }
  };





?>
