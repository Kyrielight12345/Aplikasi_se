<?php echo view('admin_view/partials/header') ?>
<?php echo view('admin_view/partials/sidebar') ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Data Nilai</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Data Nilai</li>
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
                                        <?php echo $nilai_all_guru['nama_siswa']; ?>
                                        <br><br>
                                        Semester : <?php echo $nilai_all_guru['semester']; ?>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Nama Pelajaran</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>B. Indonesia</td>
                                        <td><?php echo $nilai_all_guru['indonesia']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>B. Ingris</td>
                                        <td><?php echo $nilai_all_guru['inggris']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td><?php echo $nilai_all_guru['pai']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>PPKN</td>
                                        <td><?php echo $nilai_all_guru['ppkn']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Matematika</td>
                                        <td><?php echo $nilai_all_guru['mtk']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kimia</td>
                                        <td><?php echo $nilai_all_guru['kimia']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Fisika</td>
                                        <td><?php echo $nilai_all_guru['fisika']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>B. Jawa</td>
                                        <td><?php echo $nilai_all_guru['jawa']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kewirausahaan</td>
                                        <td><?php echo $nilai_all_guru['kwu']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Penjaskes</td>
                                        <td><?php echo $nilai_all_guru['penjas']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kejuruan 1</td>
                                        <td><?php echo $nilai_all_guru['jurusan_1']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kejuruan 2</td>
                                        <td><?php echo $nilai_all_guru['jurusan_2']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kejuruan 3</td>
                                        <td><?php echo $nilai_all_guru['jurusan_3']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font color='blue'>Rata-Rata</font>
                                        </td>
                                        <td>
                                            <font color='blue'><?php echo $nilai_all_guru['nilai']; ?></font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>