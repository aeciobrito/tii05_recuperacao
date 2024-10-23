CREATE DATABASE pizzaria;

USE pizzaria;

-- Tabela de Pizzas
CREATE TABLE IF NOT EXISTS pizza (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

-- Tabela de Sabores
CREATE TABLE IF NOT EXISTS sabor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

-- Tabela associativa entre Pizza e Sabor
CREATE TABLE IF NOT EXISTS pizza_sabor (
    pizza_id INT,
    sabor_id INT,
    PRIMARY KEY (pizza_id, sabor_id),
    FOREIGN KEY (pizza_id) REFERENCES pizza(id) ON DELETE CASCADE,
    FOREIGN KEY (sabor_id) REFERENCES sabor(id) ON DELETE CASCADE
);

-- Inserir algumas pizzas
INSERT INTO pizza (nome) VALUES ('Pizza Calabresa'), ('Pizza Quatro Queijos'), ('Pizza Frango com Catupiry');

-- Inserir alguns sabores
INSERT INTO sabor (nome) VALUES ('Calabresa'), ('Queijo'), ('Frango'), ('Catupiry');

-- Associar pizzas e sabores
INSERT INTO pizza_sabor (pizza_id, sabor_id) VALUES (1, 1); -- Pizza Calabresa com sabor Calabresa
INSERT INTO pizza_sabor (pizza_id, sabor_id) VALUES (2, 2), (2, 3), (2, 4); -- Pizza Quatro Queijos com sabores
INSERT INTO pizza_sabor (pizza_id, sabor_id) VALUES (3, 3), (3, 4); -- Pizza Frango com Catupiry com dois sabores
