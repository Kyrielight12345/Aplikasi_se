<?php echo view('admin_view/partials/header') ?> <?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Tambah Guru</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Guru</a></li>
                            <li class="breadcrumb-item active">Tambah Guru</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <?php echo form_open_multipart('guru/store'); ?>
                        <div class="card">
                            <div class="card-body">
                                <?php

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
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Informasi Guru <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>ID guru <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Isikan ID guru" name="id_guru" value="<?php  //echo $inputs['id_guru']; }
                                                                                                                                        ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Nama guru <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Isikan nama guru" name="nama_guru" value="<?php  //echo $inputs['nama_guru']; }
                                                                                                                                            ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Jenis Kelamin <span class="login-danger">*</span></label>
                                            <select name="jenis_kelamin" class="form-control select">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option <?php //echo $inputs['jenis_kelamin'] == "Laki-Laki" ? "selected" : ""; 
                                                        ?> value="Laki-Laki">Laki-Laki</option>
                                                <option <?php //echo $inputs['jenis_kelamin'] == "Perempuan" ? "selected" : ""; 
                                                        ?> value="Perempuan">Perempuan</option>
                                            </select>
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
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>