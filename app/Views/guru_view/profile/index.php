<?php echo view('guru_view/partials_guru/header') ?> <?php echo view('guru_view/partials_guru/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Profile</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="profile-header">
                    <div class="row align-items-center">
                        <?php foreach ($guru_dan_staf as $key => $row) { ?>
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img class="rounded-circle" width="100" height="100" alt="User Image" src="<?php echo base_url('uploads/' . $row['foto']) ?>">
                                </a>
                            </div>
                            <div class="col ms-md-n2 profile-user-info">
                                <h4 class="user-name mb-0"><?php echo $row['nama_guru']; ?></h4>
                                <h6 class="text-muted"><?php echo $row['jabatan']; ?></h6>
                                <div class="user-Location"><i class="fas fa-map-marker-alt"></i><?php echo $row['alamat']; ?></div>
                            </div>
                            <div class="col-auto profile-btn">
                                <a href="<?php echo base_url('guru_p/edit_avatar/' . $row['id_guru']); ?>" class="btn btn-primary">
                                    Edit
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab-cont">

                    <div class="tab-pane fade show active" id="per_details_tab">

                        <div class="row">
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        if (!empty(session()->getFlashdata('success'))) { ?>
                                            <div class="alert alert-success">
                                                <?php echo session()->getFlashdata('success'); ?>
                                            </div>
                                        <?php } ?>
                                        <?php foreach ($guru_dan_staf as $key => $row) { ?>
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Data Diri</span>
                                                <a class="edit-link" href="<?php echo base_url('guru_p/edit/' . $row['id_guru']); ?>"><i class="far fa-edit me-1"></i>
                                                    Edit</a>
                                            </h5>

                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Nama</p>
                                                <p class="col-sm-9"><?php echo $row['nama_guru']; ?></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Jenis Kelamin</p>
                                                <p class="col-sm-9"><?php echo $row['jenis_kelamin']; ?></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">tempat Lahir</p>
                                                <p class="col-sm-9"><?php echo $row['tempat_lahir']; ?></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Tanggal Lahir</p>
                                                <p class="col-sm-9"><?php echo $row['tgl_lahir']; ?></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Jabatan</p>
                                                <p class="col-sm-9"><?php echo $row['jabatan']; ?></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0">No Hp</p>
                                                <p class="col-sm-9"><?php echo $row['no_hp']; ?></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0">Alamat</p>
                                                <p class="col-sm-9 mb-0"><?php echo $row['alamat']; ?></p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Status</span>
                                            <a class="edit-link" href="<?php echo base_url('guru_p/edit_status/' . $row['id_guru']); ?>"><i class="far fa-edit me-1"></i>
                                                Edit</a>
                                        </h5>
                                        <button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i><?php echo $row['status']; ?></button>
                                    </div>
                                </div>
                            <?php } ?>


                            </div>
                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>