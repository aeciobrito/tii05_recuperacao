<?php

require_once 'config/Database.php';
require_once 'entity/Pizza.php';

class PizzaDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM pizza";
        $stmt = $this->db->query($sql);
        $pizzas = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $pizzas[] = new Pizza($row['id'], $row['nome']);
        }
        return $pizzas;
    }

    // Método para obter pizza com seus sabores
    public function getPizzaWithSabores() {        
        return null;
    }
}
