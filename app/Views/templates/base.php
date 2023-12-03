<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gensart | Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app-dark.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/iconly.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet" crossorigin="anonymous">
    <script src="<?= base_url('assets/js/init-theme.js'); ?>"></script>
    <!-- Global extensions CSS applied here -->
</head>

<body>
    <div id="app">
        <?= $this->include('templates/sidebar'); ?>
        <div id="main">
            <?= $this->include('templates/header'); ?>

            <div class="page-content">
                <?= $this->renderSection('content'); ?>
            </div>
            <?= $this->include('templates/footer'); ?>
        </div>
    </div>
    <script src="<?= base_url('assets/js/app.js'); ?>"></script>
    <script src="<?= base_url('assets/js/dark.js'); ?>"></script>

    <!-- Global extensions JS applied here -->
    <script src="<?= base_url('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

    <?= $this->renderSection('page-script'); ?>
</body>

</html>