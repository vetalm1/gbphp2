<?php

class BaseModel 
{

    private $dbHost = 'localhost:3307';
    private $dbName = 'test';
    private $dbUser = 'root';
    private $dbPass = '';
    private $dbh;
    
    private $login = '';
    private $password =''; 
  
    public function __construct(){
        
        if(!isset($this->dbh)){
            // Connect to the database
            try{
            $conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUser, $this->dbPass);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbh = $conn;
            }catch(PDOException $e){
            die("Failed to connect with MySQL: " . $e->getMessage());
            }
       }
    }
  
    public function getPass($login){   
       // echo 'login = '.$login.'<br>';
      $sql = "SELECT `login`, `pass` FROM test.logins WHERE `login` = '$login';";   // гребаные кавычки, иначе запрос глючит, не понял почему...
      $query = $this->dbh->query($sql);
      $row = $query->fetch();
    //   while ($row = $query->fetch()){
    //     $employes[] = $row;
    //   }
    //   $password = $employes[0];
    //   $password['pass']; 
      return  $row['pass']; 
    }
    
    public function setNewUser($login, $password){
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO test.logins (`login`, `pass`) VALUES ( '$login' , '$password' );";   
        return $this->dbh->exec($sql);
    }
}