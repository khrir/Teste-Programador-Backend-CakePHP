CREATE DATABASE caderno;

USE caderno;

CREATE TABLE IF NOT EXISTS `prestadores` (
            `id` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `nome` VARCHAR(50) NOT NULL,
            `telefone` VARCHAR(20) NOT NULL,
            `email` VARCHAR(30) NOT NULL,
            `foto` TEXT NOT NULL
            );

CREATE TABLE IF NOT EXISTS `servicos` (
            `id` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `nome` VARCHAR(50) NOT NULL,
            `descricao` TEXT NOT NULL,
            `preco` DECIMAL(8,2) NOT NULL
            );

CREATE TABLE IF NOT EXISTS `prestadores_has_servicos` (
            `id_prestadores` INTEGER NOT NULL,
            `id_servicos` INTEGER NOT NULL,
            CONSTRAINT prestadores_has_servicos_pk PRIMARY KEY (`id_prestadores`,`id_servicos`),
            CONSTRAINT prestadores_fk FOREIGN KEY (`id_prestadores`) REFERENCES prestadores (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
            CONSTRAINT servicos_fk FOREIGN KEY (`id_servicos`) REFERENCES servicos (`id`) ON DELETE CASCADE ON UPDATE CASCADE
            );