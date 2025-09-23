CREATE DATABASE gerenciador_tarefas;
USE gerenciador_tarefas;

CREATE TABLE usuario(
idUsuario INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
senha VARCHAR(100) NOT NULL,
grupo ENUM('Pessoal', 'Trabalho', 'Estudos')
);

-- População de dados --

INSERT INTO usuario(nome, email, senha, grupo)
VALUES
('Maria', 'maria.correa@empresa.com', 'M4ri@2024', 'Trabalho'), 
('Luiza', 'luiza.fz@gmail.com', 'LuiZ@456', 'Estudos'), 
('Joao', 'joao.a@email.com', 'J0@o789', 'Pessoal'),
('Evilyn', 'evilyn.ferraz04@gmail.com', 'Z09E%Jd02&Fs', 'Pessoal'), 
('Milena', 'milaa23423@gmail.com', 'Mil3n@456', 'Pessoal'), 
('Corey', 'corey.ashen@outlook.com', 'C0r3y@001', 'Trabalho'), 
('Vitor', 'vitorf@email.com', 'S*jf03Ed&#@Zr', 'Estudos'), 
('Pedro', 'pedro.lima@gmail.com.br', '0FJjd4xw1%&', 'Trabalho'),
('Vanessa', 'vanessa.barros@email.com', 'Van3ss@321', 'Estudos');

-- Contas com senhas hash --
-- Maria | $10$vXarT8ekGUtVRq15DBBGK.BelAjT1AArVo88sZBX4PP2IBVrKARA6 --
-- Luiza | $10$O6TTsChyGK1Oy3zv82k4Z.lFY/zIP.PJJvvIBzYAUPA6PdkDDHvMq --
-- Joao | $10$jFjmC07iJutLxZv6FZaMs.ljfaJs3CxTUoqD6ZnT1So60UQvTxlg6 --
-- Evilyn | $10$rwPawVpCQhV..jyLzNmyl.kCWwuccYPASiicUYbgINPhPvo92FhDu --
-- Milena | $10$kF4Wa.jqPHdbEQsKf/DDtuiTt5iEqwUtXmMW1RRX3zMuXGcKRoLmK --
-- Corey | $10$7YWxrJycUkQLplU/hoov0upU.54eqfT9madDk1.zxNvdJ5oGDy6ja --
-- Vitor | $10$zg5tFPzxuXPbMYhrBJ3zoeSLLj0GKMFwbHuAeWrNoQGuUPzCL2M8K --
-- Pedro | $10$E7EI0V6WOUoD7NNlexjNyOEU4qgbx7YnpfJpKk72bVN7588KR/8Mi --
-- Vanessa | $10$o5SRbNvf7X/jLDfLTRMXOu3YedAGchbv/4q/Tq/ABXu6j.Ur7dCpa --