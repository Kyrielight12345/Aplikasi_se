<?php echo view('admin_view/partials/header') ?> <?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Tambah Nilai</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('nilai'); ?>">Nilai</a></li>
                            <li class="breadcrumb-item active">Tambah Nilai</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_open_multipart('nilai/store'); ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Informasi Siswa <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>

                                <div class="card">
                                    <div class="card-body">
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
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Tahun <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" placeholder="Isikan Nis" name="nis" value="<?php  //echo $inputs['nis']; }
                                                                                                                                    ?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Semester<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" placeholder="Isikan Semester" name="semester" value="<?php  //echo $inputs['semester']; }
                                                                                                                                    ?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4"></div>
                                        <div class="col-12 col-sm-4"></div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Tahun <span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" placeholder="Isikan Tahun" name="tahun" value="<?php  //echo $inputs['tahun']; }
                                                                                                                                        ?>">
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