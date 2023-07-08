<?php echo view('guru_view/partials_guru/header') ?> <?php echo view('guru_view/partials_guru/sidebar') ?> <div class="page-wrapper">

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Profile</a></li>
                            <li class="breadcrumb-item active">Edit Profile </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_open_multipart('guru_p/update_bio'); ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Informasi Guru <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <?php foreach ($guru_dan_staf as $key => $row) { ?>
                                    <input type="hidden" name="id_guru" value="<?= $row['id_guru']; ?>">
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Nama <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" value="<?php echo $row['nama_guru']; ?>" placeholder="Isikan Nama" name="nama_guru">

                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Tempat Lahir </label>
                                            <input class="form-control" type="text" value="<?php echo $row['tempat_lahir']; ?>" name="tempat_lahir" placeholder="Isikan Tempat Lahir">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Tanggal Lahir <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text" value="<?php echo $row['tgl_lahir']; ?>" name="tgl_lahir" placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>No HP <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" value="<?php echo $row['no_hp']; ?>" name="no_hp" placeholder="Isikan Nomor HP">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4"></div>
                                    <div class="col-12 col-sm-4"></div>
                                    <div class="col-12 col-lg-8">
                                        <div class="form-group local-forms">
                                            <label>Alamat <span class="login-danger">*</span></label>
                                            <textarea name="alamat" value="<?php echo $row['alamat']; ?>" cols="39" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4"></div>
                                <?php } ?>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>