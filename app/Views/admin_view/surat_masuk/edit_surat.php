<?php echo view('admin_view/partials/header') ?> <?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Surat Masuk</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('surat_masuk/index'); ?>">Surat Masuk</a></li>
                            <li class="breadcrumb-item active">Edit Surat Masuk</li>
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
                            <?php echo form_open_multipart('surat_masuk/update'); ?>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Form Edit Surat Masuk <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nomor Surat <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan No surat" name="no_surat" value="<?php echo $surat_masuk['no_surat']; ?>">
                                    </div>
                                </div>
                                <input type="hidden" name="id_surat" value="<?php echo $surat_masuk['id_surat']; ?>">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tanggal Masuk <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="date" placeholder="DD-MM-YYYY" name="tgl_masuk" value="<?php echo $surat_masuk['tgl_masuk']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Pengirim <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan pengirim" name="pengirim" value="<?php echo $surat_masuk['pengirim']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Perihal </label>
                                        <input class="form-control" type="text" placeholder="Isikan Tempat perihal" name="prihal" value="<?php echo $surat_masuk['prihal']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>File <span class="login-danger">*</span></label>
                                        <input class="form-control" type="file" placeholder="Pilih File" name="file" value="<?php  //echo $inputs['file']; }
                                                                                                                            ?>">
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