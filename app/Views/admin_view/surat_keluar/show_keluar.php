<?php echo view('admin_view/partials/header') ?> <?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Surat Keluar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Show Surat Keluar</li>
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
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url('uploads/' . $surat_keluar['file']) ?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <dl class="dl-horizontal">
                                            <dt>Nomor Surat</dt>
                                            <dd><?php echo $surat_keluar['no_surat']; ?></dd>
                                            <dt>Tanggal</dt>
                                            <dd><?php echo $surat_keluar['tgl_keluar']; ?></dd>
                                            <dt>Pengirim</dt>
                                            <dd><?php echo $surat_keluar['pengirim']; ?></dd>
                                            <dt>Perihal</dt>
                                            <dd><?php echo $surat_keluar['prihal']; ?></dd>
                                            <dt>status</dt>
                                            <dd><?php echo $surat_keluar['status']; ?></dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('surat_keluar'); ?>" class="btn btn-outline-info float-right">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>