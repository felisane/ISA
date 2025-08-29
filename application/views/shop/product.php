<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <title><?= $product['name'] ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-4">
  <a href="<?= site_url('shop/sale') ?>" class="btn btn-link mb-3">&larr; Voltar</a>
  <div class="text-center mb-3">
    <img src="<?= $product['image'] ?>" class="img-fluid" alt="<?= $product['name'] ?>">
  </div>
  <h2 class="mb-3"><?= $product['name'] ?></h2>
  <p class="text-muted">$<?= number_format($product['price'], 2) ?></p>
  <p><?= $product['description'] ?></p>
  <p class="text-muted">In stock: <?= $product['stock'] ?></p>
  <button class="btn btn-dark">Add to bag</button>
</div>
</body>
</html>
