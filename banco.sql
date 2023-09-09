drop database if EXISTS locadora;
CREATE DATABASE IF NOT EXISTS locadora;

USE locadora;

DROP TABLE IF EXISTS filme;

CREATE TABLE filme (
  codigo INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  valor DECIMAL(10,2),
  quantidadeEstoque INT,
  descricao varchar(255),
  imagem VARCHAR(255)
);

INSERT INTO filme (nome, valor, quantidadeEstoque, imagem, descricao)
VALUES
  ('Planeta dos Macacos', 12.99, 2, 'https://i.pinimg.com/originals/c3/75/04/c37504d59ef60f537ae76033a9af0f76.jpg', "ola"),
  ('O Senhor dos Anéis', 14.99, 3, 'https://img.elo7.com.br/product/original/269274A/poster-o-senhor-dos-aneis-a-sociedade-do-anel-lo04-90x60-cm-presente-geek.jpg', "ola"),
  ('Harry Potter', 16.99, 4, 'https://http2.mlstatic.com/D_NQ_NP_672586-MLB27566127405_062018-O.webp', "ola");
