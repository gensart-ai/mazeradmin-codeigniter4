<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gensart | Lupa Password</title>
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <style>
        body {
            background-color: var(--bs-body-bg);
        }

        #auth {
            height: 100vh;
            overflow-x: hidden;
        }

        #auth #auth-right {
            height: 100%;
            background: url(./png/4853433.png), linear-gradient(90deg, #2d499d, #3f5491);
        }

        #auth #auth-left {
            padding: 5rem;
        }

        #auth #auth-left .auth-title {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        #auth #auth-left .auth-subtitle {
            font-size: 1.7rem;
            line-height: 2.5rem;
            color: #a8aebb;
        }

        #auth #auth-left .auth-logo {
            margin-bottom: 7rem;
        }

        #auth #auth-left .auth-logo img {
            height: 2rem;
        }

        @media screen and (max-width: 1399.9px) {
            #auth #auth-left {
                padding: 3rem;
            }
        }

        @media screen and (max-width: 767px) {
            #auth #auth-left {
                padding: 5rem;
            }
        }

        @media screen and (max-width: 576px) {
            #auth #auth-left {
                padding: 5rem 3rem;
            }
        }

        html[data-bs-theme="dark"] #auth-right {
            background: url(./png/4853433.png), linear-gradient(90deg, #2d499d, #3f5491);
        }
    </style>
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <img class="mb-4 w-25 h-25" src="./assets/compiled/png/logo.png" alt="Logo">
                    <h1>Lupa Password</h1>
                    <p class="fs-5 mb-5">Masukkan alamat email pada akun anda untuk mengirim link reset password</p>

                    <form action="index.html">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg">Kirim</button>
                    </form>
                    <div class="text-center mt-5 fs-5">
                        <a href="auth-login.html" class="font-bold">Ke halaman login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right" class="p-md-5 p-3">
                    <div class="d-flex align-items-center h-75">
                        <div class="card my-3 w-100">
                            <div class="card-body">
                                <h4 class="card-title">Informasi Pengumuman</h4>
                                <p class="card-text">Informasi tentang apapun dapat ditampilkan disini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>