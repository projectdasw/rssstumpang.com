<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title; ?></title>
        <?= $this->include('layout/css_core.php'); ?>
    </head>
    <body>
        <?= $this->renderSection('login_content'); ?>
        <?= $this->include('layout/js_core.php'); ?>
    </body>
</html>