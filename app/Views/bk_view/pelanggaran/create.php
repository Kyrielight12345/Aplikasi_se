<?php echo view('bk_view/partials/header') ?> <?php echo view('bk_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Tambah Pelanggaran Siswa</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Pelanggaran Siswa</a></li>
                            <li class="breadcrumb-item active">Tambah Pelanggaran Siswa</li>
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

                            <?php echo form_open_multipart('pelanggaran/store'); ?>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Informasi Pelanggaran Siswa <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tanggal <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="date" placeholder="YYYY-MM-DD" name="tanggal" value="<?php  //echo $inputs['tanggal']; }
                                                                                                                                                ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>NIS<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="nis">
                                            <?php foreach ($siswa as $key => $row) { ?>
                                                <option value="<?= $row['nis']; ?>">
                                                    <?php echo $row['nis'] . " / " . $row['nama_siswa']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Pelanggaran <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan Jenis" name="jenis" value="<?php  //echo $inputs['kode_dispen']; }
                                                                                                                                ?>">
                                    </div>
                                </div>
                                <!-- <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Poin <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan Poin" name="hari"  value="<?php  //echo $inputs['nis']; }
                                                                                                                                ?>">
                                    </div>
                                </div>     -->
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Total Poin <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan Total Poin" name="poin" value="<?php  //echo $inputs['nis']; }
                                                                                                                                    ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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