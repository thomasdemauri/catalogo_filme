<?php

require_once __DIR__ . '/Database/Connection.php';

$connection = new Connection();

$selectQuery = "SELECT * FROM filmes;";

$result = $connection->conn->query($selectQuery);

$movies = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) 
    {
        $movies[] = $row;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lista de Filmes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
  <div class="bg-white rounded-lg shadow-lg w-full max-w-5xl p-6">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">🎬 Lista de Filmes</h1>

    <table class="min-w-full border-collapse border border-gray-300">
      <thead>
        <tr class="bg-gray-200 text-gray-700">
          <th class="border border-gray-300 px-4 py-2 text-left">Título</th>
          <th class="border border-gray-300 px-4 py-2 text-left">Gênero</th>
          <th class="border border-gray-300 px-4 py-2 text-center">Avaliação</th>
          <th class="border border-gray-300 px-4 py-2 text-center">Ano</th>
          <th class="border border-gray-300 px-4 py-2 text-center">Ações</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <?php foreach($movies as $movie): ?>

            <tr class="hover:bg-gray-50">
              <td class="border border-gray-300 px-4 py-3"><?= $movie['titulo'] ?></td>
              <td class="border border-gray-300 px-4 py-3"><?= $movie['genero'] ?></td>
              <td class="border border-gray-300 px-4 py-3 text-center"><?= $movie['avaliacao'] ?></td>
              <td class="border border-gray-300 px-4 py-3 text-center"><?= $movie['ano_lancamento'] ?></td>
              <td class="border border-gray-300 px-4 py-3 text-center flex justify-center space-x-2">
                <!-- Botão Editar -->
                <button aria-label="Editar" title="Editar" class="text-blue-600 hover:text-blue-800 transition">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 11l6 6m-6-6l-2 2m5 5h3a2 2 0 002-2v-3m-3-3L9 11z" />
                  </svg>
                </button>
    
                <!-- Botão Excluir -->
                <button aria-label="Excluir" title="Excluir" class="text-red-600 hover:text-red-800 transition">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7L5 21M5 7l14 14" />
                  </svg>
                </button>
              </td>
            </tr>

        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
