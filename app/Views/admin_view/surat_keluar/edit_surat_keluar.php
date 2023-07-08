<?php echo view('admin_view/partials/header') ?> <?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Surat Keluar</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('surat_keluar/index'); ?>">Surat
                                    Keluar</a></li>
                            <li class="breadcrumb-item active">Edit Surat Keluar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php
                $inputs = session()->getFlashdata('inputs');
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div class="alert alert-danger" role="alert">
                        whoops ! Ada kesalahan saat input data, yaitu:
                        <ul>
                            <?php foreach ($errors as $error) : ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php } ?>
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                            <?php echo form_open_multipart('surat_keluar/update'); ?>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Form Edit Surat Keluar <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                                    </h5>
                                </div>
                                <input type="hidden" name="id_surat" value="<?php echo $surat_keluar['id_surat']; ?>">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nomor Surat <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan No surat" name="no_surat" value="<?php echo $surat_keluar['no_surat']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tanggal Keluar <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="date" placeholder="DD-MM-YYYY" name="tgl_keluar" value="<?php echo $surat_keluar['tgl_keluar']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Pengirim <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan pengirim" name="pengirim" value="<?php echo $surat_keluar['pengirim']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Perihal </label>
                                        <input class="form-control" type="text" placeholder="Isikan Tempat perihal" name="prihal" value="<?php echo $surat_keluar['prihal']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>File <span class="login-danger">*</span></label>
                                        <input class="form-control" type="file" placeholder="Pilih File" name="file" value="<?php echo $surat_keluar['file']; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary float-right">Update</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>