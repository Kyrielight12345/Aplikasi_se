<<?php echo view('admin_view/partials/header') ?> <<?php echo view('admin_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Penjadwalan</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Penjadwalan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Penjadwalan</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="<?php echo base_url('jadwal/create'); ?>" class="btn btn-outline-primary me-2"><i class="fas fa-plus"></i>Tambah</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Jadwal</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Ruang</th>
                                        <th>Nama Guru</th>
                                        <th>Hari</th>
                                        <th>Waktu</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($jadwal as $key => $row) { ?>
                                        <tr>
                                            <td><?php echo $key + 1; ?></td>
                                            <td><?php echo $row['id_jadwal']; ?></td>
                                            <td><?php echo $row['nama_mapel']; ?></td>
                                            <td><?php echo $row['id_ruang']; ?></td>
                                            <td><?php echo $row['nama_guru']; ?></td>
                                            <td><?php echo $row['hari']; ?></td>
                                            <td><?php echo $row['jam_awal']; ?> - <?php echo $row['jam_akhir']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url('jadwal/edit/' . $row['id_jadwal']); ?>" class="btn btn-sm btn-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?php echo base_url('jadwal/delete/' . $row['id_jadwal']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin Data Penjadwalan ini?');">
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
    </div>