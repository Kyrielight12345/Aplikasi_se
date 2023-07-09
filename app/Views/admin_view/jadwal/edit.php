<?php echo view('admin_view/partials/header') ?>
<?php echo view('admin_view/partials/sidebar') ?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Penjadwalan</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('jadwal/index'); ?>">Penjadwalan</a></li>
                            <li class="breadcrumb-item active">Edit Penjadwalan</li>
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
                        Whoops! Ada kesalahan saat input data, yaitu:
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
                            <?php echo form_open_multipart('jadwal/update'); ?>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Form Edit Penjadwalan <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <input type="hidden" name="id_jadwal" value="<?= $jadwal['id_jadwal']; ?>">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Mata Pelajaran<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="id_mapel">
                                            <?php foreach ($mapel as $row) { ?>
                                                <option value="<?= $row['id_mapel']; ?>">
                                                    <?= $row['nama_mapel']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ruang<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="id_ruang">
                                            <?php foreach ($ruang as $row) { ?>
                                                <option value="<?= $row['id_ruang']; ?>">
                                                    <?= $row['id_ruang']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nama Guru<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="id_guru">
                                            <?php foreach ($guru_dan_staf as $row) { ?>
                                                <option value="<?= $row['id_guru']; ?>">
                                                    <?= $row['nama_guru']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Hari</label>
                                    <select name="hari" id="" class="form-control">
                                        <option value="">Pilih Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms clock-icon">
                                        <label>Jam Awal<span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="time" placeholder="HH:II" name="jam_awal" value="<?= $jadwal['jam_awal']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms clock-icon">
                                        <label>Jam Akhir<span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="time" placeholder="HH:II" name="jam_akhir" value=" <?= $jadwal['jam_akhir']; ?>">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php echo base_url('jadwal'); ?>" class="btn btn-outline-info">Back</a>
                                    <button type="submit" class="btn btn-primary float-right">Update</button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>