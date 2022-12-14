<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario Laravel - ÉnioFreitas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2 align='center'><i><b><u>Produtos Informáticos</u></b></i></h2>
  <br>
  <form action="/enviar" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="mb-3 mt-3">
      <label for="codigo">Código do Produto:</label>
      <input type="text" class="form-control" id="codigo" placeholder="Introduzir Código do Produto" name="codigo">
    </div>
    <div class="mb-3 mt-3">
      <label for="nome">Nome do Produto:</label>
      <input type="text" class="form-control" id="nome" placeholder="Introduzir Nome do Produto" name="nome">
    </div>
    <div class="mb-3 mt-3">
      <label for="categoria">Categoria: </label>
      <select name="categoria" id="categoria">
      <optgroup label="Escolher Categoria">
        <option value="Peças">Peças</option>
        <option value="Acessórios">Acessórios</option>
        <option value="Jogos">Jogos</option>
        <option value="Gaming Zone">Gaming Zone</option>
      </optgroup>
      </select>
    </div>
    <div class="mb-3 mt-3">
      <label for="preco">Preço Unitário:</label>
      <input type="text" class="form-control" id="preco" placeholder="Introduzir Preço Unitário" name="preco">
    </div>
    <div class="mb-3 mt-3">
      <label for="descricao">Descrição:</label>
      <textarea class="form-control" rows="5" id="descricao" placeholder="Introduzir Descrição do Produto" name="descricao"></textarea>
    </div>
    <div class="d-grid">
        <input type="submit" class="btn btn-primary btn-block" value="Submeter Formulário">
    </div>
  </form>
</div>

</body>
</html>