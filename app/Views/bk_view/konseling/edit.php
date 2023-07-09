<?php echo view('bk_view/partials/header') ?> <?php echo view('bk_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Konseling</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('konseling/index'); ?>">Konseling</a></li>
                            <li class="breadcrumb-item active">Edit Konseling</li>
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
                            <?php echo form_open_multipart('konseling/update'); ?>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Form Edit Konseling<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <input class="form-control" type="hidden" placeholder="Isikan Nis" name="kode_konseling" value="<?php echo $konseling['kode_konseling']; ?>">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>NIS <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan Nis" name="nis" value="<?php echo $konseling['nis']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tanggal Konseling <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="date" placeholder="YYYY-MM-DD" name="tanggal" value="<?php echo $konseling['tanggal']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="form-group local-forms">
                                        <label>Keterangan <span class="login-danger">*</span></label>
                                        <textarea name="perihal" cols="39" rows="5"><?php echo $konseling['perihal']; ?></textarea>
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