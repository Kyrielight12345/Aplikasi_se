<<?php echo view('bk_view/partials/header') ?> <<?php echo view('bk_view/partials/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Pelanggaran Siswa </h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Data Pelanggaran Siswa </li>
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
                                    <h3 class="page-title">Pelanggaran Siswa</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">

                                    <a href="<?php echo base_url('pelanggaran/create'); ?>" class="btn btn-outline-primary me-2"><i class="fas fa-plus"></i> Tambah</a>

                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Siswa</th>
                                        <th>Total Poin</th>
                                        <th>Tindak Lanjut</th>
                                        <th>Tambah Pelanggaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pelanggaran as $key => $row) { ?>
                                        <tr>
                                            <td><?php echo $key + 1; ?></td>
                                            <td><?php echo $row['nama_siswa']; ?></td>
                                            <td><?php echo $row['total_poin']; ?></td>
                                            <td><?php if ($row['total_poin'] >= 150) {
                                                    $pesan = "Kembalikan Ke Orang Tua";
                                                } else if ($row['total_poin'] >= 100) {
                                                    $pesan = "Panggilan Orang Tua";
                                                } else if ($row['total_poin'] >= 50) {
                                                    $pesan = "Peringatan";
                                                } else {
                                                    $pesan = "Masih Aman";
                                                }
                                                echo $pesan ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url('pelanggaran/edit/' . $row['nis']); ?>" class="btn btn-outline-primary me-2">Lihat Keseluruhan</a>
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