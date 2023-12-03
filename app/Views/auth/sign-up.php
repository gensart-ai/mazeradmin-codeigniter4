<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app-dark.css'); ?>">
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
    <script src="<?= base_url('assets/js/init-theme.js'); ?>"></script>
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <img class="w-auto h-auto mb-5" src="<?= base_url('assets/img/logo/logo.png'); ?>" alt="Logo" loading="lazy">
                    <h1>Buat Akun</h1>
                    <p class="auth-subtitle mb-5">Daftarkan akun anda sekarang</p>

                    <form action="">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Confirm Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5 mb-3">Buat Akun</button>
                        <small>Dengan mendaftar, anda menyetujui <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> penggunaan aplikasi ini</small>
                    </form>
                    <div class="text-center mt-5 fs-5">
                        <p class='text-gray-600'>
                            Sudah punya akun? <a href="#" class="font-bold">Login</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right" class="p-md-5 p-3">
                    <div class="d-flex align-items-center h-50">
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