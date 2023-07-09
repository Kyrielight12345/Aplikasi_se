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
                        <a href="<?php echo base_url('home'); ?>"><i class="feather-grid"></i> <span> Dashboard</span></span></a>
                    </li>
                    <!-- <li class="menu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Guru</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url('guru'); ?>">Profil Guru</a></li>
                            <li><a href="invoice-grid.html">Absensi</a></li>
                            <li><a href="add-invoice.html">Nilai</a></li>
                            <li><a href="add-invoice.html">Jadwal</a></li>
                            <li><a href="add-invoice.html">Materi</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="submenu">
                        <a href="#"><i class="fas fa-clipboard"></i> <span> Tata Usaha</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="invoices.html">Management Siswa</a></li>
                            <li><a href="invoice-grid.html">Management Mapel</a></li>
                            <li><a href="add-invoice.html">Ruang</a></li>
                            <li><a href="add-invoice.html">Penjadwalan</a></li>
                            <li><a href="add-invoice.html">Management Surat</a></li>
                        </ul>
                    </li>  -->
                    <!-- <li class="submenu">
                    <a href="#"><i class="fas fa-building"></i> <span> Kurikulum </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url('kurikulum'); ?>">Kelola Kurikulum</a></li>
                        </ul>
                    </li> -->
                    <li class="submenu">
                        <a href="#"><i class="fas fa-clipboard"></i> <span> Menu BK</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <!-- <li><a href="invoices.html">Riwayat Konseling</a></li> -->
                            <li><a href="<?php echo base_url('dispensasi'); ?>">Dispensasi</a></li>
                            <li><a href="<?php echo base_url('konseling'); ?>">Konseling</a></li>
                            <li><a href="<?php echo base_url('pelanggaran'); ?>">Pelanggaran Siswa</a></li>
                            <li><a href="<?php echo base_url('surat'); ?>">Surat Panggilan Orang Tua</a></li>
                        </ul>
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