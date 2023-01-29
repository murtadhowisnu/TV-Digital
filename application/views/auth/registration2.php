<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Gangguan</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets/') ?>img/favicon.png" />
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url('assets/') ?>img/login.jpg" alt="IMG" />
                </div>

                <div class="login100-form validate-form">
                    <span class="login100-form-title mt-2"> Registration </span>
                    <?= $this->session->flashdata('message'); ?>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn" data-toggle="modal" data-target="#personalModal">Perusahaan</button>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn" data-toggle="modal" data-target="#companyModal">HANKAM</button>
                    </div>
                    <div class="text-center p-t-12 mt-5">
                        <a class="txt2">
                            <b>Already have an account? <br></b>
                        </a>
                        <a class="txt2" href="<?= base_url('auth') ?>">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                            Login Here
                        </a>
                    </div>
                    <div class="text-center p-t-12 mt-3">
                        <img src="<?= base_url('assets/') ?>img/kominfo.png" class="kominfo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Personal-->
    <div class="modal fade" id="personalModal" tabindex="-1" aria-labelledby="personalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="personalModalLabel">Registrasi Perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('auth/registration2'); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="isr" class="col-sm-3 col-form-label ml-3">ISR</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control title" id="isr" name="isr" placeholder="ISR" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label ml-3">Fullname</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control title" id="nama" name="nama" placeholder="Fullname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label ml-3">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control title" id="email" name="email" placeholder="Email" required> </div>
                        </div>
                        <div class="form-group row">
                            <label for="telp" class="col-sm-3 col-form-label ml-3">No Telp</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control title" id="telp" name="telp" placeholder="No Telp" required> </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label ml-3">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control title" id="alamat" name="alamat" placeholder="Alamat" required> </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label ml-3">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control title" id="password" name="password" placeholder="Password" required> </div>
                        </div>
                        <div class="form-group row">
                            <label for="password2" class="col-sm-3 col-form-label ml-3">Repeat</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control title" id="password2" name="password2" placeholder="Repeat Password"> </div>
                        </div>
                        <span style="margin-left:15px;" id='message'></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Company-->
    <div class="modal fade" id="companyModal" tabindex="-1" aria-labelledby="companyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="companyModalLabel">Company Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control title" id="company" name="company" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control title" id="email" name="email" placeholder="email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Register</button>
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

    <script>
        $('#password, #password2').on('keyup', function () {
            if ($('#password').val() == '') {
                $('#message').html('Password is Empty').css('color', 'red'); 
            } else if ($('#password').val() == $('#password2').val()) {
                $('#message').html('Password Matching').css('color', 'green');
            } else 
                $('#message').html('Password Not Matching').css('color', 'red');
            });
    </script>
</body>

</html>