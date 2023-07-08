<?php echo view('guru_view/partials_guru/header') ?>
<?php echo view('guru_view/partials_guru/sidebar') ?>


<link rel="stylesheet" href="<?php echo base_url('Themes_dash'); ?>/dist/css/adminlte.min.css">
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Dashboard</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Siswa</h6>
                                <h3>50055</h3>
                            </div>
                            <div class="db-icon">
                                <img src="<?php echo base_url('theme'); ?>/assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Guru</h6>
                                <h3>50+</h3>
                            </div>
                            <div class="db-icon">
                                <img src="<?php echo base_url('theme'); ?>/assets/img/img_real/guru.png" alt="Dashboard Icon" width="70px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Ruang Kelas</h6>
                                <h3>30+</h3>
                            </div>
                            <div class="db-icon">
                                <img src="<?php echo base_url('theme'); ?>/assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Tanggal</h6>
                                <h3><?php echo date('d  M  Y'); ?></h3>
                            </div>
                            <div class="db-icon">
                                <img src="<?php echo base_url('theme'); ?>/assets/img/img_real/tgl.png" alt="Dashboard Icon" width="70px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Header (Page header) -->
    <!-- TO DO List -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                Event Terdekat
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <ul class="todo-list" data-widget="todo-list">
                <li>
                    <!-- drag handle -->
                    <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- todo text -->
                    <span class="text">Pelaksanaan Uji Kompetensi Keahlian </span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 10-12 Mei 2023</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                    </div>
                </li>
                <li>
                    <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <span class="text">Libur lebaran</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 19-25 Mei 2023</small>
                    <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                    </div>
                </li>
                <li>
                    <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <span class="text">Penilaian Akhir Semester</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 12 -16 Juni 2023</small>
                    <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                    </div>
                </li>
                <li>
                    <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <span class="text">Pembagian Raport Siswa</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 23 Juni 2023</small>
                    <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                    </div>
                </li>
                <li>
                    <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <span class="text">Libur Kenaikan Kelas</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 26 - 10 Juni 2023</small>
                    <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                    </div>
                </li>
                <li>
                    <span class="handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                    </span>

                    <span class="text">Penerimaan Peserta didik baru </span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 3 - 8 Juli 2023</small>
                    <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <button type="button" class="btn btn-info float-right">
                <font color='white'><i class="fas fa-plus"></i> Add item</font>
            </button>
        </div>
    </div>
</div>

