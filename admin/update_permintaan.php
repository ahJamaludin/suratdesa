<?php include 'header.php';
?>
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

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                    <div class="card shadow mb-4 col-lg">
                        <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Review Permintaan Surat</h6>
                        </div>
                    <div class="card-body">
                        <?php 
                        $id = $_GET['id_surat'];
                        $sd = mysqli_query($xx,"SELECT * FROM tbl_surat WHERE id_surat = '$id'");
                        while($x = mysqli_fetch_assoc($sd)){
                        ?>
                    <form action="proses_review.php" method="POST">
                        <div class="form-group">
                        <input type="hidden" class="form-control" id="id_surat" name="id_surat" value="<?= $x['id_surat']?>">
                        <input type="hidden" class="form-control" id="no_kk" name="no_kk" value="<?= $x['no_kk']?>">
                        <input type="hidden" class="form-control" id="nama_warga" name="nama_warga" value="<?= $x['nama_warga']?>">
                        <input type="hidden" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $x['tempat_lahir']?>">
                        <input type="hidden" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $x['tgl_lahir']?>">
                        <input type="hidden" class="form-control" id="NIK" name="NIK" value="<?= $x['NIK']?>">
                        <input type="hidden" class="form-control" id="jk" name="jk" value="<?= $x['jk']?>">
                        <input type="hidden" class="form-control" id="agama" name="agama" value="<?= $x['agama']?>">
                        <input type="hidden" class="form-control" id="status" name="status" value="<?= $x['status']?>">
                        <input type="hidden" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $x['pekerjaan']?>">
                        <input type="hidden" class="form-control" id="alamat" name="alamat" value="<?= $x['alamat']?>">
                        <input type="hidden" class="form-control" id="keperluan" name="keperluan" value="<?= $x['keperluan']?>">
                        <label>Yang Bertanda Tangan</label>
                        <select name="ttd" id="ttd" class="form-control">
                            <?php 
                            $sqq = mysqli_query($xx,"SELECT * FROM tbl_desa");
                            $l = mysqli_fetch_assoc($sqq);
                            ?>
                            <option value="">Yang Bertanda Tangan</option>
                            <option value="<?= $l['Petinggi'] ?>"><?= $l['Petinggi'] ?></option>
                            <option value="<?= $l['Carik'] ?>"><?= $l['Carik'] ?></option>
                        </select>
                        </div>

                        <div class="form-group">
                        <label>Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control">
                            <option value="">Pilih Jabatan</option>
                            <option value="Petinggi">Petinggi</option>
                            <option value="Carik">Carik</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label>Keterangan</label>
                        <select name="keterangan" id="keterangan" class="form-control">
                            <option value="">Pilih Keterangan</option>
                            <option value="Sudah Dilihat">Sudah Dilihat</option>
                            <option value="Belum Dilihat">Belum Dilihat</option>
                        </select>
                        </div>

                        <hr class="sidebar-divider d-none d-md-block">
                        <button type="submit" class="btn btn-primary" name="hitung">Simpan</button>
                    </form>
                    <?php } ?>
                    </div>
                    </div>
                    </div>
                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include'footer.php'; ?>