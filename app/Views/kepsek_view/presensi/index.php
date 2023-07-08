<?php echo view('kepsek_view/partials_kepsek/header') ?> <?php echo view('kepsek_view/partials_kepsek/sidebar') ?> <div class="page-wrapper">
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
                                            <td><?php echo $row['HADIR']; ?></td>
                                            <td><?php echo $row['IJIN']; ?></td>
                                            <td><?php echo $row['ALPHA']; ?></td>
                                            <td><?php echo $row['total']; ?></td>
                                            <td><?php echo $row['presentase']; ?> %</td>

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