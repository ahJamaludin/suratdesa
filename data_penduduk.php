<?php
include 'header.php'; 
$sqli = mysqli_query($xx, "SELECT * FROM tbl_desa");
$d = mysqli_fetch_array($sqli);
?>        <!-- End of Sidebar -->

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
                                    src="assets/img/jepara.png">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="card shadow mb-4">
                        <div class="card-header py-1 mt-2">
                            <h6 class="text-primary">Data Penduduk Desa <?= $d['nama_desa'] ?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="1%">No</th>
                                            <th width="9%">No KK</th>
                                            <th width="1%">NIK</th>
                                            <th>Nama</th>
                                            <th>T.Tgl Lahir</th>
                                            <th width="10%">OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        $warga = mysqli_query($xx,"SELECT * FROM tbl_penduduk ORDER BY id DESC");
                                        while($z = mysqli_fetch_assoc($warga)){
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $z['no_kk'] ?></td>
                                            <td><?= $z['nik'] ?></td>
                                            <td><?= $z['nama_kk'] ?></td>
                                            <td><?= $z['tempat_lahir'] ?> <?= Indonesia2Tgl($z['tanggal_lahir']) ?></td>
                                            <td>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal<?= $z['nik'] ?>"><i class="fas fa-info-circle"></i></button>
                                                <a href="Tsurat.php?id=<?= $z['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-plus"></i></a>
                                            </td>
                                        </tr>
                                         <!-- Modal -->
                                         <div class="modal fade" id="exampleModal<?= $z['nik'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Penduduk</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        
                                                    <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">No KK :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['no_kk'] ?>" readonly>
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">NIK :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['nik'] ?>" readonly>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Nama Penduduk:</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['nama_kk']; ?>" readonly>
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">Tempat Tgl Lahir :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['tempat_lahir']; ?> <?= $z['tanggal_lahir']?>" readonly>
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">Jenis Kelamin :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['jenis_kelamin'] ?>" readonly>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">Agama :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['agama'] ?>" readonly>
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">Pendidikan :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['pendidikan'] ?>" readonly>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">Pekerjaan :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['pekerjaan'] ?>" readonly>
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">Status Perkawinan : :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['status_perkawinan'] ?>" readonly>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">Hubungan Keluarga :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['hubungan_keluarga'] ?>" readonly>
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">Status Warga :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['warga'] ?>" readonly>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">Nama Ayah :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['ayah'] ?>" readonly>
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                            <label for="recipient-name" class="col-form-label">Nama Ibu :</label>
                                                            <input type="text" class="form-control" id="recipient-name" value="<?= $z['ibu'] ?>" readonly>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        

                                                        <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Alamat :</label>
                                                            <textarea type="text" class="form-control" id="recipient-name" readonly><?= $z['alamat'] ?> RT.<?= $z['rt'] ?>/RW.<?= $z['rw'] ?></textarea>
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