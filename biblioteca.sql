-- =====================================================================
--  Parte A - Banco de dados, tabela e dados de teste
--  Avaliação: Sistema de Consulta de Livros (PHP, MySQL, PDO e POO)
-- =====================================================================

-- 1) Cria o banco de dados (se ainda não existir) e seleciona-o
CREATE DATABASE IF NOT EXISTS biblioteca
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE biblioteca;

-- 2) Cria a tabela "livros"
CREATE TABLE IF NOT EXISTS livros (
    codigo                  INT          NOT NULL AUTO_INCREMENT,
    titulo                  VARCHAR(150) NOT NULL,
    autor                   VARCHAR(100) NOT NULL,
    ano_publicacao          INT          NOT NULL,
    quantidade_disponivel   INT          NOT NULL,
    PRIMARY KEY (codigo)
);

-- 3) Dados de teste (pelo menos 3 livros)
--    Um deles com quantidade 0 para testar o status "Indisponível".
INSERT INTO livros (titulo, autor, ano_publicacao, quantidade_disponivel) VALUES
    ('Dom Casmurro',                 'Machado de Assis',      1899, 3),
    ('O Cortiço',                    'Aluísio Azevedo',       1890, 0),
    ('Memórias Póstumas de Brás Cubas', 'Machado de Assis',   1881, 2),
    ('Capitães da Areia',            'Jorge Amado',           1937, 5),
    ('Vidas Secas',                  'Graciliano Ramos',      1938, 1);

-- 4) Conferência rápida
SELECT codigo, titulo, autor, ano_publicacao, quantidade_disponivel
FROM livros
ORDER BY titulo ASC;
