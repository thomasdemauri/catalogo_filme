﻿# 🎬 Catálogo de Filmes

Este é um projeto desenvolvido para fins acadêmicos na disciplina de **Desenvolvimento Web**, como parte das atividades do curso de Análise e Desenvolvimento de Sistemas da FATEC.

## 📚 Objetivo

O sistema consiste em um **catálogo de filmes** simples, onde é possível:

- Cadastrar filmes com título, sinopse, gênero, avaliação, ano e imagem de capa;
- Listar todos os filmes cadastrados;
- Visualizar os detalhes de um filme;
- Editar informações dos filmes;
- Excluir filmes do sistema.

## 🛠️ Tecnologias utilizadas

- **PHP** (sem framework)
- **MySQL** (banco de dados relacional)
- **Tailwind CSS** (estilização com classes utilitárias)
- **Git/GitHub** (controle de versão)
- HTML5 & CSS3

## Script SQL 

Esse foi o script utilizado.

Nome do banco de dados: *catalogo_filmes*

```sql
USE catalogo_filmes;

CREATE TABLE filmes(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	titulo VARCHAR(255) NOT NULL,
	sinopse TEXT NOT NULL,
	genero VARCHAR(30),
	avaliacao FLOAT,
	ano_lancamento VARCHAR(4),
	imagem_capa_url VARCHAR(2048)
);
```
## 👨‍💻 Integrantes do grupo

- Thomas Mauro  
- Rafael Costa  
- Guilherme Simão  
- Gabriel Rodrigues  
