<?php
  class Mahasiswa_model {
    
    private $dbh; // database host
    private $stmt; // statement

    public function __construct() {
      // dats sourch name
      $dsn = 'mysql:host=localhost;dbname=universitas';
      try {
        $this->dbh = new PDO($dsn, 'root', '');
      } catch (PDOException $e) {
        die($e->getMessage());
      };
    }

    public function getMahasiswa(){
      $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
      $this->stmt->execute();
      return $this->stmt->fetchAll();
    }
    
  }
?>