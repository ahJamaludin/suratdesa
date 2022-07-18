<?php include'header.php'; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="../assets/img/jepara.png">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
        <div class="container-fluid">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th>Nama</th>
                                    <th width="15%">NIK</th>
                                    <th width="10%">No KK</th>
                                    <th width="15%">Yang Bertanda Tangan</th>
                                    <th width="16%">OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                $ss = mysqli_query($xx, "SELECT * FROM tbl_surat ORDER BY id_surat DESC");
                                while($c = mysqli_fetch_assoc($ss)){
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $c['nama_warga'] ?></td>
                                    <td><?= $c['NIK'] ?></td>
                                    <td><?= $c['no_kk'] ?></td>
                                    <td><?= $c['ttd'] ?></td>
                                    <td>
                                        <a href="update_permintaan.php?id_surat=<?= $c ['id_surat']?>" class="btn btn-success btn-sm"><i class="fas fa-check-circle"></i></a>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal<?= $c['NIK'] ?>"><i class="fas fa-info-circle"></i></button>
                                        <a href="hapus_permintaan.php?id_surat=<?= $c ['id_surat']?>" class="btn btn-danger btn-sm"><i class="fas fa-times-circle"></i></a>
                                        <a href="../surat/surat.php?id_surat=<?= $c['id_surat']?>" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $c['NIK'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Surat</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                
                                            <div class="row">
                                            <div class="col-sm-12">
                                                    <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">NIK :</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="<?= $c['NIK'] ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nama Penduduk:</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="<?= $c['nama_warga']; ?>" readonly>
                                                </div>
                                                </div>
                                                <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                    <label for="recipient-name" class="col-form-label">Tempat Tgl Lahir :</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="<?= $c['tempat_lahir']; ?> <?= $c['tgl_lahir']?>" readonly>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                    <label for="recipient-name" class="col-form-label">Jenis Kelamin :</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="<?= $c['jk'] ?>" readonly>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                    <label for="recipient-name" class="col-form-label">Agama :</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="<?= $c['agama'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                    <label for="recipient-name" class="col-form-label">Status :</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="<?= $c['status'] ?>" readonly>
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Pekerjaan :</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="<?= $c['pekerjaan'] ?>" readonly>
                                                </div>
                                                </div>
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Keperluan :</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="<?= $c['keperluan'] ?>" readonly>
                                                </div>
                                                </div>

                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Alamat :</label>
                                                    <textarea type="text" class="form-control" id="recipient-name" readonly><?= $c['alamat'] ?></textarea>
                                                </div>
                                                </div>
                                                <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                    <label for="recipient-name" class="col-form-label">Yang Bertanda Tangan :</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="<?= $c['ttd']; ?>" readonly>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                    <label for="recipient-name" class="col-form-label">Jabatan :</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="<?= $c['jabatan'] ?>" readonly>
                                                    </div>
                                                </div>
                                                </div>

                                            </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- modal -->
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include'footer.php'; ?>