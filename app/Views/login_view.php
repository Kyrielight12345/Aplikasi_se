<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Skansa</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('theme'); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('theme'); ?>/assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="<?php echo base_url('theme'); ?>/assets/plugins/icons/flags/flags.css">
    <link rel="stylesheet" href="<?php echo base_url('theme'); ?>/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('theme'); ?>/assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('theme'); ?>/assets/css/style.css">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="<?php echo base_url('theme'); ?>/assets/img/img_real/logo_skansa.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Welcome to Skansa</h1>
                            <p class="account-subtitle"></p>
                            <h2>Masuk</h2>

                            <form action="<?php echo base_url('login/process'); ?>">
                                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <?php echo session()->getFlashdata('error'); ?>
                                    </div>
                                <?php endif; ?>
                                <form method="post" action="<?= base_url(); ?>/login/process">
                                    <?= csrf_field(); ?>
                                    <div class="form-group">
                                        <label>Username <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" name="username">
                                        <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Password <span class="login-danger">*</span></label>
                                        <input class="form-control pass-input" type="text" name="password">
                                        <span class="profile-views feather-eye toggle-password"></span>
                                    </div>
                                    <div class="forgotpass">
                                        <div class="remember-me">
                                            <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Ingatkan Saya
                                                <input type="checkbox" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <a href="forgot-password.html">Lupa Password?</a>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url('theme'); ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url('theme'); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('theme'); ?>/assets/js/feather.min.js"></script>
    <script src="<?php echo base_url('theme'); ?>/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url('theme'); ?>/assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="<?php echo base_url('theme'); ?>/assets/plugins/apexchart/chart-data.js"></script>
    <script src="<?php echo base_url('theme'); ?>/assets/js/script.js"></script>
</body>

</html>