<?php echo view('guru_view/partials_guru/header') ?> <?php echo view('guru_view/partials_guru/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Management Absen</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Management Absen</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <?php echo form_open_multipart('absen/update'); ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Presensi</h3>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (!empty(session()->getFlashdata('success'))) { ?>
                            <div class="alert alert-success">
                                <?php echo session()->getFlashdata('success'); ?>
                            </div>
                        <?php } ?>
                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Presensi</th>
                                        <th>Hadir</th>
                                        <th>Sakit/ijin</th>
                                        <th>Alpha</th>
                                        <th>Total Kehadiran</th>
                                        <th>Presentase</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($presensi as $key => $row) { ?>
                                        <tr>
                                            <td><?php echo $key + 1; ?></td>
                                            <td><?php echo $row['nis']; ?></td>
                                            <td><?php echo $row['nama_siswa']; ?></td>
                                            <td>
                                                <select name="keterangan[<?php echo $row['nis']; ?>]" id="">
                                                    <option value="hadir">Hadir</option>
                                                    <option value="ijin">Ijin</option>
                                                    <option value="alpha">Alpha</option>
                                                </select>
                                            </td>
                                            <td><?php echo $row['HADIR']; ?></td>
                                            <td><?php echo $row['IJIN']; ?></td>
                                            <td><?php echo $row['ALPHA']; ?></td>
                                            <td><?php echo $row['total']; ?></td>
                                            <td><?php echo $row['presentase']; ?> %</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="student-group-form">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="form-group">
                        <div class="search-student-btn">
                            <button type="btn" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>