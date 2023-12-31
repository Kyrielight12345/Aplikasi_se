<?php echo view('admin_view/partials/header') ?> <?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Presensi</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('nilai'); ?>">Presensi</a></li>
                            <li class="breadcrumb-item active">Edit Presensi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_open_multipart('absen_tu/update'); ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Presensi Siswa<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                            </div>
                            <?php
                            // if (!empty($inputs)){
                            //   $inputs = session()->getFlashdata('inputs');
                            //}
                            $errors = session()->getFlashdata('errors');
                            if (!empty($errors)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    Ada kesalahan saat input data, yaitu:
                                    <ul>
                                        <?php foreach ($errors as $error) : ?>
                                            <li><?= esc($error) ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            <?php } ?>
                            <input type="hidden" name="nis" value="<?php echo $presensi['nis']; ?>">
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Hadir <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" placeholder="Isikan Nilai Tugas 1" name="HADIR" value="<?php echo $presensi['HADIR']; ?>">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>IJIN/SAKIT <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" placeholder="Isikan Nilai Tugas 2" name="IJIN" value="<?php echo $presensi['IJIN']; ?>">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Alpha <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" placeholder="Isikan Nilai Tugas 3" name="ALPHA" value="<?php echo $presensi['ALPHA']; ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
</div>
</div>