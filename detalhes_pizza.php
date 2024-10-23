<?php
require_once 'dao/PizzaDAO.php';

// Instanciar objetos necessários e verificação de ID
$pizzaDAO = null;
$pizzaID = null;
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
