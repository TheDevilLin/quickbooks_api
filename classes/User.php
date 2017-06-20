<?php

class User
{
    private $db;

    function __construct($conn){
        $this->db = $conn;
    }

    public function getID($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->execute([
          'id' => $id
        ]);
        $result=$stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function showAllData()
    {
      $stmt = $this->db->prepare("SELECT * FROM users");
      $stmt->execute();

      $results = $stmt->fetchall(PDO::FETCH_OBJ);
      return $results;
    }
}