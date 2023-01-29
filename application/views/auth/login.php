<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pengukuran Radio</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets/') ?>img/kominfo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>vendor/login/bootstrap/css/bootstrap.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>vendor/login/animate/animate.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>vendor/login/css-hamburgers/hamburgers.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>vendor/login/select2/select2.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/util.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/main.css" />
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url('assets/') ?>img/login2.png" alt="IMG" />
                </div>
                <form class="login100-form validate-form" method="POST" action="<?= base_url('auth'); ?>">
                    <span class="login100-form-title">Login </span>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="nip" id="nip" placeholder="NIP" value="<?= set_value('nip'); ?>" />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password" />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">Login</button>
                    </div>
                    <div class="text-center p-t-12">
                    </div>
                    <div class="text-center p-t-12">
                        <a href="https://balmonpontianak.id/"><img src="<?= base_url('assets/') ?>img/kominfo.png" class="kominfo"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/') ?>vendor/login/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/') ?>vendor/login/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/login/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/') ?>vendor/login/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/') ?>vendor/login/tilt/tilt.jquery.min.js"></script>
    <script>
        $(".js-tilt").tilt({
            scale: 1.1,
        });
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/') ?>js/main.js"></script>
</body>

</html>