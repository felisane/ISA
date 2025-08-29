<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Vitrine da Loja</title>
    <link rel="stylesheet" href="/assets/css/store.css">
</head>
<body>
    <h1>Vitrine da Loja</h1>
    <form method="get" class="filters">
        <input type="text" name="q" placeholder="Pesquisar produtos" value="<?php echo htmlspecialchars($query); ?>">
        <select name="category">
            <?php foreach ($categories as $key => $label): ?>
                <option value="<?php echo $key; ?>" <?php echo ($category === $key || (!$category && $key==='all')) ? 'selected' : ''; ?>>
                    <?php echo $label; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Buscar</button>
    </form>

    <div class="products">
        <?php foreach ($items as $item): ?>
            <div class="product-card">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                <h3><?php echo $item['name']; ?></h3>
                <p class="category"><?php echo $item['category']; ?></p>
                <p class="price">€<?php echo number_format($item['price'], 2, ',', '.'); ?></p>
            </div>
        <?php endforeach; ?>
        <?php if (empty($items)): ?>
            <p>Nenhum produto encontrado.</p>
        <?php endif; ?>
    </div>
</body>
</html>
