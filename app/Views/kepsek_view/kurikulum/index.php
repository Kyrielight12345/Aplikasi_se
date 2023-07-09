<<?php echo view('kepsek_view/partials_kepsek/header') ?> <<?php echo view('kepsek_view/partials_kepsek/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Kurikulum</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Kurikulum</li>
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
                                    <h3 class="page-title">Kurikulum</h3>
                                </div>

                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Kurikulum</th>
                                        <th>kompetesi_dasar</th>
                                        <th>Deskripsi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kurikulum as $key => $row) { ?>
                                        <tr>
                                            <td><?php echo $key + 1; ?></td>
                                            <td><?php echo $row['id_kurikulum']; ?></td>
                                            <td><?php echo $row['kompetensi_dasar']; ?></td>
                                            <td><?php echo $row['deskripsi']; ?></td>
                                            <td>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row-3 float-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>