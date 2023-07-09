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
                        <a href="<?php echo base_url('home/index_kepsek'); ?>"><i class="feather-grid"></i> <span> Dashboard</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_siswa'); ?>"><i class="fas fa-graduation-cap"></i> <span>
                                Data Siswa</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_guru'); ?>"><i class="fas fa-graduation-cap"></i> <span>
                                Data Guru</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_nilai'); ?>"><i class="fas fa-clipboard"></i> <span>Nilai Siswa</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_absen'); ?>"><i class="fas fa-book-reader"></i> <span>Presensi Siswa</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_ruang'); ?>"><i class="fas fa-graduation-cap"></i> <span> Data Ruang</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_mapel'); ?>"><i class="fas fa-chalkboard-teacher"></i> <span>Data Mapel</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_jadwal'); ?>"><i class="fas fa-chalkboard-teacher"></i> <span>Data Jadwal</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_regalisir'); ?>"><i class="fas fa-building"></i> <span>Status Regalisir </span></span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-clipboard"></i> <span> Management Surat</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url('kep_surat_masuk'); ?>">Surat Masuk</a></li>
                            <li><a href="<?php echo base_url('kep_surat_keluar'); ?>">Surat Keluar</a></li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_kurikulum'); ?>"><i class="fas fa-clipboard"></i> <span>Data Kurikulum</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_kelola_ujian'); ?>"><i class="fas fa-clipboard"></i> <span>Data Ujian</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_kalender'); ?>"><i class="fas fa-clipboard"></i> <span>Data Kalender</span></span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url('kepsek_all/index_user'); ?>"><i class="fas fa-solid fa-user"></i></i> <span> User</span></span></a>
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