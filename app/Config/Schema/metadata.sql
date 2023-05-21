CREATE DATABASE caderno;

USE caderno;

CREATE TABLE IF NOT EXISTS `prestadores` (
            `id` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `nome` VARCHAR(50) NOT NULL,
            `telefone` VARCHAR(20) NOT NULL,
            `email` VARCHAR(30) NOT NULL,
            `foto` TEXT NOT NULL,
            `servicos_id` INTEGER NOT NULL,
            CONSTRAINT servicos_fk FOREIGN KEY (`servicos_id`) REFERENCES servicos (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            );

CREATE TABLE IF NOT EXISTS `servicos` (
            `id` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `nome` VARCHAR(50) NOT NULL,
            `descricao` TEXT NOT NULL,
            `preco` DECIMAL(8,2) NOT NULL
            );
