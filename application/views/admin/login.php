<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <title>Admin - Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
  <h1 class="mb-4">Acesso Administrativo</h1>
  <?php if (!empty($error)): ?>
     <div class="alert alert-danger"><?= $error ?></div>
  <?php endif; ?>
  <?= form_open('admin/login'); ?>
     <div class="mb-3">
        <label class="form-label">Usuário</label>
        <input type="text" name="username" class="form-control" required>
     </div>
     <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" name="password" class="form-control" required>
     </div>
     <button type="submit" class="btn btn-primary">Entrar</button>
  <?= form_close(); ?>
</body>
</html>
