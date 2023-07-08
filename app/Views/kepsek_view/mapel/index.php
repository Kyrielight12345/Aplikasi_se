<<?php echo view('kepsek_view/partials_kepsek/header') ?> <<?php echo view('kepsek_view/partials_kepsek/sidebar') ?> <div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Mapel</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Mapel</li>
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
                                    <h3 class="page-title">Mapel</h3>
                                </div>

                            </div>
                        </div>
                        <!-- <div class="row"> -->
                        <!-- <div class="col-md-6"> -->
                        <!-- <div class="form-group"> -->
                        <!-- <?php
                                // echo form_label('Search');
                                // $form_keyword = [
                                //     'type' => 'text',
                                //     'name' => 'keyword',
                                //     'id' => 'keyword',
                                //     'value' => $keyword,
                                //     'class' => 'form-control',
                                //     'placeholder' => 'Enter keyword...'
                                // ];
                                // echo form_input($form_keyword);
                                ?> -->
                        <!-- </div> -->
                        <!-- </div> -->
                        <!-- </div> -->
                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>No</th>
                                        <th>Id Mapel</th>
                                        <th>Nama Mapel</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mapel as $key => $row) { ?>
                                        <tr>
                                            <td><?php echo $key + 1; ?></td>
                                            <td><?php echo $row['id_mapel']; ?></td>
                                            <td><?php echo $row['nama_mapel']; ?></td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row-3 float-right">
                            <div class="col-md-12">
                                <?php echo $pager->links('mapel', 'bootstrap_pagination') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>