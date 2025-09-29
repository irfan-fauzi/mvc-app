<?php

  class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct() {
       $dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname ;
       $option = [
        PDO::ATTR_PERSISTENT => true, // optimasi database
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // error mode
       ];

      try {
        
        $this->dbh = new PDO($dsn, $this->user, $this->password, $option );
      } catch (PDOException $e) {
        die($e->getMessage());
      };
    }

    public function query($sql) {
      $this->stmt = $this->dbh->prepare($sql);
    }

    public function execute() {
      $this->stmt->execute();
    }

    public function resultSet() {
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single() {
      $this->execute();
      return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }


    





   
  }

?>