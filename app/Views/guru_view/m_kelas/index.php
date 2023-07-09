<?php echo view('guru_view/partials_guru/header') ?> <?php echo view('guru_view/partials_guru/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Management Jadwal</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Management Jadwal</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <?php echo form_open_multipart('Jadwal/tambah' . session()->get('id_guru')); ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Jadwal</h3>
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
                                        <th>mapel</th>
                                        <th>Ruang</th>
                                        <th>hari</th>
                                        <th>jam</th>
                                    </tr>
                                </thead>
                                <?php foreach ($jadwal as $key => $row) { ?>
                                    <tr>
                                        <td><?php echo $key + 1; ?></td>
                                        <td>indonesia</td>
                                        <td><?php echo $row['id_ruang']; ?></td>
                                        <td><?php echo $row['hari']; ?></td>
                                        <td><?php echo $row['jam_awal']; ?> - <?php echo $row['jam_akhir']; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>