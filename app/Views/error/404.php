<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman tidak ditemukan - 404</title>
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <style>
        #error {
            background-color: #ebf3ff;
            padding: 2rem 0;
            min-height: 100vh;
        }

        #error .img-error {
            height: 435px;
            object-fit: contain;
            padding: 3rem 0;
        }

        #error .error-title {
            font-size: 3rem;
            margin-top: 1rem;
        }

        html[data-bs-theme="dark"] #error {
            background-color: #151521;
        }
    </style>
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="error">
        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="./assets/compiled/svg/error-404.svg" alt="Not Found">
                    <h1 class="error-title">Oops.</h1>
                    <p class='fs-5 text-gray-600'>Halaman tidak ditemukan</p>
                    <a href="index.html" class="btn btn-lg btn-outline-primary mt-3">Kembali ke halaman utama</a>
                </div>
            </div>
        </div>


    </div>
</body>

</html>