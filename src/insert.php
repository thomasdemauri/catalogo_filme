<?php

require_once __DIR__ . '/Database/Connection.php';

$connection = new Connection();

$movieData = $_REQUEST;

$query = "INSERT INTO filmes(titulo, sinopse, genero, avaliacao, ano_lancamento, imagem_capa_url) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $connection->conn->prepare($query);
$stmt->bind_param(
    "sssdss",
    $movieData['titulo'],
    $movieData['sinopse'],
    $movieData['genero'],
    $movieData['avaliacao'],
    $movieData['ano_lancamento'],
    $movieData['imagem_capa_url'],
);

$row = $stmt->execute();

$stmt->close();
$connection->closeConnection();

header("Location: list_movies_view.php");
exit;