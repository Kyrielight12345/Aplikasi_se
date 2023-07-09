<<?php echo view('bk_view/partials/header') ?> <<?php echo view('bk_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Surat Panggilan Orang Tua </h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Data Surat Panggilan Orang Tua </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="student-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by No ...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-student-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Surat Panggilan Orang Tua</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">

                                    <a href="<?php echo base_url('surat/create'); ?>" class="btn btn-outline-primary me-2"><i class="fas fa-plus"></i> Tambah</a>

                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>No Surat</th>
                                        <th>Hal</th>
                                        <th>NIS</th>
                                        <th>Hari</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Keperluan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($surat as $key => $row) { ?>
                                        <tr>

                                            <td><?php echo $row['no_surat']; ?></td>
                                            <td><?php echo $row['hal']; ?></td>
                                            <td><?php echo $row['nis']; ?></td>
                                            <td><?php echo $row['hari']; ?></td>
                                            <td><?php echo $row['tanggal']; ?></td>
                                            <td><?php echo $row['waktu']; ?></td>
                                            <td><?php echo $row['keperluan']; ?></td>

                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url('surat/edit/' . $row['no_surat']); ?>" class="btn btn-sm btn-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?php echo base_url('surat/delete/' . $row['no_surat']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin Data Surat ini?');">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>