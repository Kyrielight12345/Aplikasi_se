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
        <?php echo form_open_multipart('guru_p/update_avatar'); ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
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
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Ganti Avatar <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <?php foreach ($guru_dan_staf as $key => $row) { ?>
                                    <input type="hidden" name="id_guru" value="<?php echo $row['id_guru']; ?>">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo form_label('Image', 'Image'); ?>
                                            <br>
                                            <img src="<?php echo base_url('uploads/' . $row['foto']) ?>" class="img-fluid">
                                            <br>
                                            <br>
                                            <?php echo form_label('Ganti Image', 'Ganti Image'); ?>
                                            <?php echo form_upload('foto', $row['foto']); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>