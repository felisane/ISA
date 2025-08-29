<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <title>Admin - Painel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
  <h1 class="mb-4">Painel Administrativo</h1>
  <ul class="list-group">
    <li class="list-group-item"><a href="<?= site_url('stock'); ?>">Gestão de Estoque</a></li>
    <li class="list-group-item"><a href="<?= site_url('invoices'); ?>">Facturação</a></li>
    <li class="list-group-item"><a href="<?= site_url('admin/logout'); ?>">Sair</a></li>
  </ul>
</body>
</html>
