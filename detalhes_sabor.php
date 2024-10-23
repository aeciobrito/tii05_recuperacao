<?php
require_once 'dao/SaborDAO.php';

$saborDAO = new SaborDAO();
$saborID = $_GET['id'] ?? null;

if ($saborID) {
    $sabor = $saborDAO->getSaborWithPizzas($saborID);
} else {
    echo "Sabor não encontrado!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Sabor</title>
</head>
<body>
    <h1>Detalhes do Sabor</h1>

    <p><strong>Nome:</strong> <?= $sabor->getNome(); ?></p>

    <h2>Pizzas com este sabor</h2>
    <ul>
        <?php foreach ($sabor->getPizzas() as $pizza): ?>
            <li><?= $pizza->getNome(); ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="index.php">Voltar</a>
</body>
</html>
