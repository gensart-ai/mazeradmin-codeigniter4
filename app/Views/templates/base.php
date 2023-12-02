<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gensart | Dashboard</title>
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
    <script src="./assets/static/js/initTheme.js"></script>
</head>

<body>
    <div id="app">
        <?= $this->include('templates/sidebar'); ?>
        <div id="main">
            <!-- Burger for mobile view -->
            

            <?= $this->include('templates/header'); ?>

            <div class="page-content">
                <div class="row">
                    <div class="col-12">
                        <p>Hello there, the content should be in here</p>
                    </div>
                </div>
            </div>
            <?= $this->include('templates/footer'); ?>
        </div>
    </div>
    <script src="./assets/static/js/components/dark.js"></script>
    <script src="./assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="./assets/compiled/js/app.js"></script>
    <script src="./assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="./assets/static/js/pages/dashboard.js"></script>
    <?= $this->renderSection('page-script'); ?>
</body>

</html>