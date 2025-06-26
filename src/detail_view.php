<?php

require_once __DIR__ . '/Database/Connection.php';

$connection = new Connection();

$movieData = $_GET;

$selectQuery = "SELECT * FROM filmes WHERE id = ?";

$stmt = $connection->conn->prepare($selectQuery);
$stmt->bind_param("i", $movieData['id']);
$stmt->execute();
$result = $stmt->get_result();  

$movie = [];

if ($row = $result->fetch_assoc()) {
    $movie = $row;
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Detalhes do Filme</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
  
  <div class="bg-white rounded-lg shadow-lg max-w-4xl w-full flex flex-col md:flex-row gap-6 p-6">
  <?php if (!empty($movie)): ?>
      <!-- Capa do Filme -->
      <div class="flex-shrink-0 md:w-1/3">
        <img
          src="<?= $movie['imagem_capa_url'] ?>"
          alt="Capa do Filme"
          class="rounded-lg shadow-md w-full h-auto object-cover"
        />
      </div>
    <!-- Informações e Sinopse -->
    <div class="md:w-2/3 flex flex-col">
      <h1 class="text-4xl font-bold mb-4 text-gray-800"><?= $movie['titulo'] ?></h1>
      <p class="text-gray-600 mb-6"><span class="font-semibold">Gênero:</span><?= $movie['genero'] ?></p>
      <p class="text-gray-600 mb-6"><span class="font-semibold">Avaliação:</span><?= $movie['avaliacao'] ?></p>
      <p class="text-gray-600 mb-6"><span class="font-semibold">Ano de Lançamento:</span> <?= $movie['ano_lancamento'] ?></p>

      <h2 class="text-2xl font-semibold mb-3 text-gray-700">Sinopse</h2>
      <p class="text-gray-700 leading-relaxed">
        <?= $movie['sinopse'] ?>
      </p>
    </div>

    <?php else: ?>

    <div class="md:w-2/3 flex flex-col">
      <p class="text-gray-700 leading-relaxed">Não existe um filme com esse ID.</p>
    </div>

    <?php endif; ?>

    <a href="list_movies_view.php" class="text-blue-800">Voltar</a>
  </div>

</body>
</html>
