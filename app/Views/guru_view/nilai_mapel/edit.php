<?php echo view('guru_view/partials_guru/header') ?> <?php echo view('guru_view/partials_guru/sidebar') ?> <div class="page-wrapper">
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
        <?php echo form_open_multipart('nilai_mapel/update_nilai'); ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Nilai Siswa<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
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
                            <input type="hidden" name="nis" value="<?php echo $nilai_mapel['nis']; ?>">
                            <input type="hidden" name="id_guru" value="<?php echo $nilai_mapel['id_guru']; ?>">
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Tugas 1 <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" placeholder="Isikan Nilai Tugas 1" name=" tugas1" value="<?php echo $nilai_mapel['tugas1']; ?>">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Tugas 2 <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" placeholder="Isikan Nilai Tugas 2" name="tugas2" value="<?php echo $nilai_mapel['tugas2']; ?>">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Tugas 3 <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" placeholder="Isikan Nilai Tugas 3" name="tugas3" value="<?php echo $nilai_mapel['tugas3']; ?>">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Tugas 4 <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" placeholder="Isikan Nilai Tugas 4" name="tugas4" value="<?php echo $nilai_mapel['tugas4']; ?>">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>UTS <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" placeholder="Isikan Nilai UTS " name="uts" value="<?php echo $nilai_mapel['uts']; ?>">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>UAS <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" placeholder="Isikan Nilai UAS " name="uas" value="<?php echo $nilai_mapel['uas']; ?>">
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