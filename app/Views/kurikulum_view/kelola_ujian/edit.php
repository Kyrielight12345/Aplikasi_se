<?php echo view('kurikulum_view/partials/header') ?> <?php echo view('kurikulum_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Kelola Ujian</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('kelola_ujian/index'); ?>">Kelola Ujian</a></li>
                            <li class="breadcrumb-item active">Edit</li>
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

                            <?php echo form_open_multipart('kelola_ujian/update'); ?>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Form Edit Ruang <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <input type="hidden" value="<?php echo $kelola_ujian['id'];   ?>" name="id">

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nama Pengawas<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="id_guru">
                                            <?php foreach ($guru_dan_staf as $key => $row) { ?>
                                                <option value="<?= $row['id_guru']; ?>">
                                                    <?php echo $row['id_guru'] . " / " . $row['nama_guru']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Mata Pelajaran<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="id_mapel">
                                            <?php foreach ($mapel as $key => $row) { ?>
                                                <option value="<?= $row['id_mapel']; ?>">
                                                    <?= $row['id_mapel'] . " / " . $row['nama_mapel'];; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ruang<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="id_ruang">
                                            <?php foreach ($ruang as $key => $row) { ?>
                                                <option value="<?= $row['id_ruang']; ?>">
                                                    <?php echo $row['id_ruang']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Hari<span class="login-danger">*</span></label>
                                        <select class="form-control select">
                                            <option>Pilih Hari</option>
                                            <option>Senin</option>
                                            <option>Selasa</option>
                                            <option>Rabu</option>
                                            <option>Kamis</option>
                                            <option>Jumat</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tanggal <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="date" placeholder="YYYY-MM-DD" name="tanggal" value="<?php echo $kelola_ujian['tanggal'];   ?>" </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms clock-icon">
                                            <label>Jam Masuk<span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="time" placeholder="HH:II" name="jam_masuk" value="<?php echo $kelola_ujian['jam_masuk'];   ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms clock-icon">
                                            <label>Jam Keluar<span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="time" placeholder="HH:II" name="jam_keluar" value="<?php echo $kelola_ujian['jam_keluar'];   ?>">
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