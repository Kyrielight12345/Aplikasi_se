<?php echo view('bk_view/partials/header') ?> <?php echo view('bk_view/partials/sidebar') ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Data Pelanggaran</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Data Pelanggaran</li>
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
                                    <h3 class="page-title">
                                        <?= $pelanggaran['nama_siswa']; ?>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Tanggal</th>
                                        <th>Pelanggaran</th>
                                        <th>
                                            <font color='blue'>Jumlah Poin</font>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_pelanggaran as $key => $row) { ?>
                                        <tr>
                                            <td><?php echo $key + 1; ?></td>
                                            <td><?php echo isset($row['tanggal']) ? $row['tanggal'] : ''; ?></td>
                                            <td><?php echo isset($row['jenis']) ? $row['jenis'] : ''; ?></td>
                                            <td>
                                                <font color='blue'><?php echo isset($row['poin']) ? $row['poin'] : ''; ?></font>
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