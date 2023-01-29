<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi - E-Gangguan</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/') ?>regis.css">
    <link rel="icon" type="image/png" href="<?= base_url('assets/') ?>img/favicon.png" />
</head>

<body>
    <div class="testbox">
        <h1>Registration</h1>

        <!-- <form method="POST" action="<?= base_url('auth/registration'); ?>">
            <hr>
            <div class="accounttype">
                <input type="radio" value="None" id="radioOne" name="account" checked />
                <label for="radioOne" class="radio" chec>Personal</label>
                <input type="radio" value="None" id="radioTwo" name="account" />
                <label for="radioTwo" class="radio">Company</label>
            </div>
            <hr>

            <div>
                <label id="icon" for="name"><i class="icon-user"></i></label>
                <input type="text" name="name" id="name" placeholder="Full Name" value="<?= set_value('name') ?>" required />
                <?= form_error('name', '<small class="alert">', '</small>') ?>
            </div>

            <div>
                <label id="icon" for="name"><i class="icon-envelope "></i></label>
                <input type="email" name="email" id="email" placeholder="Email" value="<?= set_value('email') ?>" required />
                <?= form_error('email', '<small class="alert">', '</small>') ?>
            </div>


            <label id="icon" for="name"><i class="icon-shield"></i></label>
            <input type="password" name="password" id="password" placeholder="Password" minlength="8" required />

            <label id="icon" for="name"><i class="icon-shield"></i></label>
            <input type="password" name="confirm_password" id="confirm_password" class="rpass" placeholder="Repeat Password" required />
            <script>
                var password = document.getElementById("password"),
                    confirm_password = document.getElementById("confirm_password");

                function validatePassword() {
                    if (password.value != confirm_password.value) {
                        confirm_password.setCustomValidity("Passwords Don't Match");
                    } else {
                        confirm_password.setCustomValidity('');
                    }
                }

                password.onchange = validatePassword;
                confirm_password.onkeyup = validatePassword;
            </script> -->

        <button type="button" class="button" data-toggle="modal" data-target="#personalModal">Personal</button>
        <button type="button" class="button2">Company</button>

        <div class="text-center p-t-12">
            <img src="<?= base_url('assets/') ?>img/kominfo.png" class="kominfo">
        </div>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="personalModal" tabindex="-1" role="dialog" aria-labelledby="personalModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="personalModalTitle">Personal Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>