<?php
require_once 'dao/PizzaDAO.php';

$pizzaDAO = new PizzaDAO();
$pizzaID = $_GET['id'] ?? null;

if ($pizzaID) {
    $pizza = $pizzaDAO->getPizzaWithSabores($pizzaID);
} else {
    echo "Pizza não encontrada!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Pizza</title>
</head>
<body>
    <h1>Detalhes da Pizza</h1>

    <p><strong>Nome:</strong> <?= $pizza->getNome(); ?></p>

    <h2>Sabores</h2>
    <ul>
        <?php foreach ($pizza->getSabores() as $sabor): ?>
            <li><?= $sabor->getNome(); ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="index.php">Voltar</a>
</body>
</html>
