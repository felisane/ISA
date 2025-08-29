<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <title>Gestão de Estoque</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
  <h1 class="mb-4">Gestão de Estoque</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th><th>Nome</th><th>Stock</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $p): ?>
      <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['name'] ?></td>
        <td><?= $p['stock'] ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
