<?php echo view('admin_view/partials/header') ?> <?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Data Guru</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Guru</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="contaiter-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-8">
                                        <dl class="dl-horizontal">
                                            <dt>ID Guru</dt>
                                            <dd><?php echo $guru_dan_staf['id_guru']; ?></dd>
                                            <dt>Nama Guru</dt>
                                            <dd><?php echo $guru_dan_staf['nama_guru']; ?></dd>
                                            <dt>Jenis kelamin</dt>
                                            <dd><?php echo $guru_dan_staf['jenis_kelamin']; ?></dd>
                                            <dt>Alamat</dt>
                                            <dd><?php echo $guru_dan_staf['alamat']; ?></dd>
                                            <dt> No HP</dt>
                                            <dd><?php echo $guru_dan_staf['no_hp']; ?></dd>
                                            <dt>TTL</dt>
                                            <dd><?php echo $guru_dan_staf['tempat_lahir']; ?>,
                                                <?php echo $guru_dan_staf['tgl_lahir']; ?></dd>
                                            <dt>Jabatan</dt>
                                            <dd><?php echo $guru_dan_staf['jabatan']; ?></dd>
                                            <dt>Status</dt>
                                            <dd><?php echo $guru_dan_staf['status']; ?></dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('guru'); ?>" class="btn btn-outline-info float-right">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>