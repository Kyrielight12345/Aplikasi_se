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
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main Menu</span>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('home/index_kurikulum'); ?>"><i class="feather-grid"></i> <span>
                                Dashboard</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kalender'); ?>"><i class="fas fa-graduation-cap"></i> <span>
                                Data Kalender Pendidikan</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kurikulum'); ?>"><i class="fas fa-graduation-cap"></i> <span>
                                Data kurikulum</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kelola_ujian'); ?>"><i class="fas fa-graduation-cap"></i> <span>
                                Data Panitia Ujian</span></span></a>
                    </li>
                </ul>
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