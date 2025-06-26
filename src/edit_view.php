<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro de Filme</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">
  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-xl">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">🎬 Cadastro de Filme</h2>

    <form action="edit.php" method="POST" class="space-y-5">
      
      <!-- Título -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Título</label>
        <input type="text" name="titulo" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"" />
      </div>

      <!-- Sinopse -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Sinopse</label>
        <textarea name="sinopse" rows="4" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
      </div>

      <!-- Gênero --> 
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Gênero</label>
        <select name="genero" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="" disabled selected>Selecione um gênero</option>
          <option>Ação</option>
          <option>Aventura</option>
          <option>Comédia</option>
          <option>Drama</option>
          <option>Ficção Científica</option>
          <option>Romance</option>
          <option>Terror</option>
        </select>
      </div>

      <!-- Avaliação e Ano de Lançamento -->
      <div class="grid grid-cols-2 gap-4">
        <!-- Avaliação -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Avaliação (0 a 10)</label>
          <input type="number" name="avaliacao" min="0" max="10" step="0.1" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <!-- Ano -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Ano de Lançamento</label>
          <input type="text" name="ano_lancamento" maxlength="4" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
      </div>

      <!-- URL da Capa -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">URL da Capa do Filme</label>
        <input type="text" name="imagem_capa_url" placeholder="https://exemplo.com/capa.jpg" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <!-- Botão -->
      <div class="text-center">
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
          Salvar Filme
        </button>
      </div>

    </form>
  </div>
</body>
</html>
