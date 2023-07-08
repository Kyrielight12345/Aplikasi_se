<?php echo view('admin_view/partials/header') ?> <?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Tambah Regalisir</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Regalisir</a></li>
                            <li class="breadcrumb-item active">Tambah Regalisir</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <?php echo form_open_multipart('regalisir/update_status'); ?>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                // if (!empty($inputs)){
                                //   $inputs = session()->getFlashdata('inputs');
                                //}
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
                                        <h5 class="form-title student-info">Regalisir<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                    </div>

                                    <?php foreach ($regalisir as $key => $row) { ?>
                                        <tr>
                                            <input type="hidden" name="nis" value="<?php echo $row['nis']; ?>">
                                            <input type="hidden" name="status" value="SUDAH REGALISIR">
                                            <?php echo form_upload('file', $row['file']); ?>
                                        </tr>

                                    <?php } ?>
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