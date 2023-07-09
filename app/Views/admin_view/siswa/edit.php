<?php echo view('admin_view/partials/header') ?> <?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Siswa</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('siswa/index'); ?>">Siswa</a></li>
                            <li class="breadcrumb-item active">Edit Siswa</li>
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
                            <?php echo form_open_multipart('siswa/update'); ?>
                            <div class="row">

                                <div class="col-12">
                                    <h5 class="form-title student-info">Form Edit Siswa <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                                    </h5>
                                </div>

                                <input class="form-control" type="hidden" placeholder="Isikan NIS" name="nis" value="<?php echo $siswa['nis']; ?>">

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nama Siswa <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan Nama" name="nama_siswa" value="<?php echo $siswa['nama_siswa']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Jurusan <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan Jurusan" name="jurusan" value="<?php echo $siswa['jurusan']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Jenis Kelamin <span class="login-danger">*</span></label>
                                        <select name="jenis_kelamin" class="form-control select">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option <?php echo $siswa['jenis_kelamin'] == "Laki-Laki" ? "selected" : "";
                                                    ?> value="Laki-Laki">Laki-Laki</option>
                                            <option <?php echo $siswa['jenis_kelamin'] == "Perempuan" ? "selected" : "";
                                                    ?> value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tempat Lahir </label>
                                        <input class="form-control" type="text" placeholder="Isikan Tempat Lahir" name="tempat_lahir" value="<?php echo $siswa['tempat_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tanggal Lahir <span class="login-danger">*</span></label>
                                        <input class="form-control datetimepicker" type="date" placeholder="DD-MM-YYYY" name="tgl_lahir" value="<?php echo $siswa['tgl_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Agama <span class="login-danger">*</span></label>
                                        <select name="agama" class="form-control select">
                                            <option value="">Pilih Agama</option>
                                            <option <?php echo $siswa['agama'] == "Islam" ? "selected" : "";
                                                    ?> value="Islam">Islam</option>
                                            <option <?php echo $siswa['agama'] == "Kristen" ? "selected" : "";
                                                    ?> value="Kristen">Kristen</option>
                                            <option <?php echo $siswa['agama'] == "Hindu" ? "selected" : "";
                                                    ?> value="Hindu">Hindu</option>
                                            <option <?php echo $siswa['agama'] == "Budha" ? "selected" : "";
                                                    ?> value="Budha">Budha</option>
                                            <option <?php echo $siswa['agama'] == "Konghucu" ? "selected" : "";
                                                    ?> value="Konghucu">Konghucu</option>
                                            <option <?php echo $siswa['agama'] == "Lainya" ? "selected" : "";
                                                    ?> value="Lainya">Lainya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Kelas <span class="login-danger">*</span></label>
                                        <select name="id_kelas" class="form-control select">
                                            <option value="">Silahkan Pilih Kelas</option>
                                            <option <?php echo $siswa['id_kelas'] == "10" ? "selected" : "";
                                                    ?> value="10">10</option>
                                            <option <?php echo $siswa['id_kelas'] == "11" ? "selected" : "";
                                                    ?> value="11">11</option>
                                            <option <?php echo $siswa['id_kelas'] == "12" ? "selected" : "";
                                                    ?> value="12">12</option>
                                            <option <?php echo $siswa['id_kelas'] == "Lulusan" ? "selected" : "";
                                                    ?> value="Lulusan">Lulus</option>
                                            <option <?php echo $siswa['id_kelas'] == "DO dari" ? "selected" : "";
                                                    ?> value="DO dari">DO</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>No HP <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan Nomor HP" name="no_hp" value="<?php echo $siswa['no_hp']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="form-group local-forms">
                                        <label>Alamat <span class="login-danger">*</span></label>
                                        <textarea name="alamat" cols="39" rows="5" value=""><?php echo $siswa['alamat']; ?></textarea>
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