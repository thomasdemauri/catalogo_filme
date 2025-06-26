<?php

require_once __DIR__ . '/Database/Connection.php';

$connection = new Connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {

    $id = $_POST['id'];

    $selectQuery = "DELETE FROM filmes WHERE id=?";
    $stmt = $connection->conn->prepare($selectQuery);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        header("Location: list_movies_view.php");
        exit;
    } else {
        echo "Erro ao excluir o filme.";
    }
    
    $stmt->close();
    $connection->closeConnection();
}

?>