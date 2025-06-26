<?php

require_once __DIR__ . '/Database/Connection.php';

$connection = new Connection();

$movieData = $_POST;

$updateQuery = "UPDATE filmes SET titulo = ?, sinopse = ?, genero = ?, avaliacao = ?, ano_lancamento = ?, imagem_capa_url = ? WHERE id = ?";

$stmt = $connection->conn->prepare($updateQuery);
$stmt->bind_param(
    "sssdssi",
    $movieData['titulo'],
    $movieData['sinopse'],
    $movieData['genero'],
    $movieData['avaliacao'],
    $movieData['ano_lancamento'],
    $movieData['imagem_capa_url'],
    $movieData['id']
);

$row = $stmt->execute();

$connection->closeConnection();

header("Location: list_movies_view.php");
exit;

?>