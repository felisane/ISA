<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <title>Shipshop - On Sale</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container py-4">
  <h1 class="mb-4">On Sale</h1>
  <div class="row g-3">
    <?php foreach ($products as $p): ?>
    <div class="col-6">
      <div class="card h-100">
        <img src="<?= $p['image'] ?>" class="card-img-top" alt="<?= $p['name'] ?>">
        <div class="card-body">
          <h5 class="card-title"><?= $p['name'] ?></h5>
          <p class="card-text">$<?= number_format($p['price'], 2) ?></p>
          <a href="<?= site_url('shop/product/'.$p['id']) ?>" class="btn btn-sm btn-primary">View</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>
