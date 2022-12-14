<!DOCTYPE html>
<html>
  <head>
    <title>Laravel - Produtos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1 align="center">Lista dos Produtos</h1>
      <hr />
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Código do Produto</th>
            <th>Nome do Produto</th>
            <th>Categoria</th>
            <th>Preço Unitário</th>
            <th>Descrição</th>
          </tr>
        </thead>
        <tbody>
          @foreach($produtos as $row)
          <tr>
            <th scope="row">{{ $row -> id }}</th>
            <td>{{ $row -> cdproduto }}</td>
            <td>{{ $row -> nproduto }}</td>
            <td>{{ $row -> ncategoria }}</td>
            <td>{{ $row -> punitario }}</td>
            <td>{{ $row -> cdescricao }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </body>
</html>