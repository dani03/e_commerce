<?php
 // utilisation de la programmation orientée objet
  class DB{
       private $host = 'localhost';
       private $username = 'phpmyadmin';
       private $password = 'root';
       private $database = 'phoneCell';
       private $db;

       public function __construct($host = null, $username = null, $password = null, $database = null){
         if($host != null){
           $this->host = $host;
           $this->username = $username;
           $this->password = $password;
           $this->database = $database;
         }

         

       }
      //  on cree une methode qui permet de faire une requete plus rapidement
       public function query($sql){
         // on initialise l'objet creer dans le header et on fait une requete($req)
         $req =$this->db->prepare($sql);
         $req->execute();
         //on recupere toutes les données et on l'affiche dans un tableau avec la commande (fetchAll)
         return $req->fetchAll(PDO::FETCH_OBJ);
        //  PDO::FETCH_OBJ pour recuper les information sous forme d'objet
       }
  }
