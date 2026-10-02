<!DOCTYPE html>
<html>
<head><title><?= esc($pageTitle) ?></title></head>
<body>
  <nav><a href="<?= base_url('/') ?>">Home</a> | <a href="<?= base_url('about') ?>">About</a></nav>
  <h1><?= esc($pageTitle) ?></h1>
  <p><?= esc($content) ?></p>
</body>
</html>