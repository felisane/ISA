<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <title>Loja - Produtos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
  <h1 class="mb-4">Catálogo</h1>
  <form method="get" class="mb-4">
    <div class="row g-2">
      <div class="col-md-4">
        <input type="text" name="q" class="form-control" placeholder="Pesquisar" value="<?= html_escape($q) ?>">
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="min_price" class="form-control" placeholder="Preço min" value="<?= html_escape($min_price) ?>">
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="max_price" class="form-control" placeholder="Preço max" value="<?= html_escape($max_price) ?>">
      </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary w-100">Filtrar</button>
      </div>
      <div class="col-md-2">
        <a href="<?= site_url('products') ?>" class="btn btn-secondary w-100">Limpar</a>
      </div>
    </div>
  </form>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th><th>Nome</th><th>Preço</th><th>Stock</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($products)): ?>
      <tr>
        <td colspan="4" class="text-center">Nenhum produto encontrado.</td>
      </tr>
      <?php endif; ?>
      <?php foreach ($products as $p): ?>
      <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['name'] ?></td>
        <td>R$ <?= number_format($p['price'], 2, ',', '.') ?></td>
        <td><?= $p['stock'] ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
