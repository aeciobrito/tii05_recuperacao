<?php

require_once 'config/Database.php';
require_once 'entity/Sabor.php';
require_once 'entity/Pizza.php';

class SaborDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM sabor";
        $stmt = $this->db->query($sql);
        $sabores = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $sabores[] = new Sabor($row['id'], $row['nome']);
        }
        return $sabores;
    }

    // Método para obter sabor com suas pizzas
    public function getSaborWithPizzas($saborID) {
       
        return null;
    }
}
