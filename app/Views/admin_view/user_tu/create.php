<?php echo view('admin_view/partials/header') ?> <?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Tambah User</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">User</a></li>
                            <li class="breadcrumb-item active">Tambah User</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <?php echo form_open_multipart('user_tu/store'); ?>
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
                                        <h5 class="form-title student-info">Informasi User <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>username <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Isikan username" name="username" value="<?php  //echo $inputs['username']; }
                                                                                                                                            ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>password <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Isikan password" name="password" value="<?php  //echo $inputs['password']; }
                                                                                                                                            ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>id_guru <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="Isikan id_guru" name="id_guru" value="<?php  //echo $inputs['id_guru']; }
                                                                                                                                        ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>akses <span class="login-danger">*</span></label>
                                            <select name="akses" class="form-control select">
                                                <option value="">Pilih hak akses</option>
                                                <option <?php //echo $inputs['akses'] == "guru" ? "selected" : ""; 
                                                        ?> value="guru">guru</option>
                                                <option <?php //echo $inputs['akses'] == "admin" ? "selected" : ""; 
                                                        ?> value="admin">admin</option>
                                                <option <?php //echo $inputs['akses'] == "kepsek" ? "selected" : ""; 
                                                        ?> value="kepsek">kepsek</option>
                                                <option <?php //echo $inputs['akses'] == "bk" ? "selected" : ""; 
                                                        ?> value="bk">bk</option>
                                                <option <?php //echo $inputs['akses'] == "kurikulum" ? "selected" : ""; 
                                                        ?> value="kurikulum">kurikulum</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>nama </label>
                                            <input class="form-control" type="text" placeholder="Isikan nama " name="nama" value="<?php  //echo $inputs['nama']; }
                                                                                                                                    ?>">
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