<?php echo view('kurikulum_view/partials/header') ?> <?php echo view('kurikulum_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Tambah Kelola Panitia Ujian</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('kelola_ujian/index'); ?>">Kelola Panitia Ujian</a></li>
                            <li class="breadcrumb-item active">Tambah</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php if (session()->has('warning')) : ?>
                    <div class="alert alert-warning">
                        <?php echo session('warning'); ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->has('success')) : ?>
                    <div class="alert alert-success">
                        <?php echo session('success'); ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->has('errors')) : ?>
                    <div class="alert alert-danger">
                        <?php foreach (session('errors') as $error) : ?>
                            <p><?php echo $error; ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

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
                            <?php echo form_open_multipart('kelola_ujian/store'); ?>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Kelola Panitia Ujian<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <!-- <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>ID Guru<span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan ID Guru" name="id_guru"  value="<?php  //echo $inputs['id_guru']; } 
                                                                                                                                    ?>">
                                    </div>
                                </div> -->
                                <!-- <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>ID Mata Pelajaran<span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan ID Mata Pelajaran" name="id_mapel"  value="<?php  //echo $inputs['id_mapel']; } 
                                                                                                                                                ?>">
                                    </div>
                                </div> -->
                                <!-- <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>ID Ruang<span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan ID Ruang" name="id_ruang"  value="<?php  //echo $inputs['id_ruang']; } 
                                                                                                                                        ?>">
                                    </div>
                                </div> -->
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nama Pengawas<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="id_guru">
                                            <?php foreach ($guru_dan_staf as $key => $row) { ?>
                                                <option value="<?= $row['id_guru']; ?>">
                                                    <?php echo $row['nama_guru']; ?>
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
                                            <?php foreach ($ruang as $key => $row) { ?>
                                                <option value="<?= $row['id_ruang']; ?>">
                                                    <?php echo $row['id_ruang']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tanggal <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="date" placeholder="YYYY-MM-DD" name="tanggal" value="<?php  //echo $inputs ['tanggal']; } 
                                                                                                                                                ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms clock-icon">
                                        <label>Jam Masuk<span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="time" placeholder="HH:II" name="jam_masuk" value="<?php  //echo $inputs['jam_masuk']; } 
                                                                                                                                            ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms clock-icon">
                                        <label>Jam Keluar<span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="time" placeholder="HH:II" name="jam_keluar" value="<?php  //echo $inputs['jam_keluar']; } 
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