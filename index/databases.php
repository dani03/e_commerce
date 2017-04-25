<?php
class DB{
     private $host = 'localhost';
     private $username = 'phpmyadmin';
     private $password = 'root';
     private $database = 'phone';
     public __construct($host = null, $username = null, $password = null, $database = null){
        if($host !== null){
          this->host = $host;
          this->username = $username;
          this->password = $password;
          this->database = $database;
        }
     }
}
 ?>
