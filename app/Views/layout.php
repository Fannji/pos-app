<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'POS System') ?></title>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Home</a> |
        <a href="<?= site_url('/about') ?>">About</a> |
        <a href="<?= site_url('/customers') ?>">Customers</a> |
        <a href="<?= site_url('/users') ?>">Users</a>
    </nav>
    <hr>

    <?= $this->renderSection('content') ?>
</body>
</html>