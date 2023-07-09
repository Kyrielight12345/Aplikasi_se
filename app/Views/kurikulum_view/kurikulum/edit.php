<?php echo view('kurikulum_view/partials/header') ?> <?php echo view('kurikulum_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Kurikulum</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('kurikulum/index'); ?>">Kurikulum</a></li>
                            <li class="breadcrumb-item active">Edit Kurikulum</li>
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
                            <?php echo form_open_multipart('kurikulum/update'); ?>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Kurikulum <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>

                                <input class="form-control" type="hidden" placeholder="Isikan Kode Kurikulum" name="id_kurikulum" value="<?php echo $kurikulum['id_kurikulum']; ?>">

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>kompetesi dasar<span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Isikan kompetensi dasar" name="kompetensi_dasar" value="<?php echo $kurikulum['kompetensi_dasar']; ?>">
                                    </div>
                                </div>
                                <div class=" col-12 col-lg-8">
                                    <div class="form-group local-forms">
                                        <label>Deskripsi<span class="login-danger">*</span></label>
                                        <textarea name="deskripsi" cols="39" rows="5"><?php echo $kurikulum['deskripsi']; ?></textarea>
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