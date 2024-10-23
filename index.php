<?php
require_once 'dao/PizzaDAO.php';
require_once 'dao/SaborDAO.php';

$pizzaDAO = new PizzaDAO();
$saborDAO = new SaborDAO();

$pizzas = $pizzaDAO->getAll();
$sabores = $saborDAO->getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzas e Sabores</title>
</head>
<body>
    <h1>Lista de Pizzas</h1>
    <table>
        <thead>
            <tr>
                <th>Pizza</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pizzas as $pizza): ?>
                <tr>
                    <td><?= $pizza->getNome(); ?></td>
                    <td><a href="detalhes_pizza.php?id=<?= $pizza->getId(); ?>">Detalhes</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h1>Lista de Sabores</h1>
    <table>
        <thead>
            <tr>
                <th>Sabor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sabores as $sabor): ?>
                <tr>
                    <td><?= $sabor->getNome(); ?></td>
                    <td><a href="detalhes_sabor.php?id=<?= $sabor->getId(); ?>">Detalhes</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
