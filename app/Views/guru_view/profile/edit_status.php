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
        <?php echo form_open_multipart('guru_p/update_status'); ?>
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
                                    <h5 class="form-title student-info">Upload SK PNS <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <p>Silahkan Upload SK dalam bentuk format pdf ataupun foto</p>
                                <?php foreach ($guru_dan_staf as $key => $row) { ?>
                                    <input type="hidden" name="id_guru" value="<?php echo $row['id_guru']; ?>">
                                    <input type="hidden" name="status" value="PNS">
                                    <?php echo form_upload('sk', $row['sk']); ?>
                            </div>
                    </div>
                <?php } ?>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
                </form>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>