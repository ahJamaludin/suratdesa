<?php 
include 'header.php';
include 'koneksi.php';
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
                                    src="assets/img/jepara.png">
                            </a>
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
                        <h6 class="m-0 font-weight-bold text-primary">Form Pembuatan Surat</h6>
                        </div>
                    <div class="card-body">
                        <?php
                        $id = $_GET['id']; 
                            $ss = mysqli_query($xx,"SELECT * FROM tbl_penduduk WHERE id = '$id'");
                            $s=mysqli_fetch_assoc($ss);
                        ?>
                    
                    <form action="Csurat.php" method="POST">
                <div class="form-group">
                    <label>Nama Penduduk</label>
                    <input type="hidden" class="form-control" id="tempat_lahir" name="tempat_lahir" required value="<?= $s['tempat_lahir']?>">
                    <input type="hidden" class="form-control" id="tgl_lahir" name="tgl_lahir" required value="<?= $s['tanggal_lahir']?>">
                    <input type="hidden" class="form-control" id="jk" name="jk" required value="<?= $s['jenis_kelamin']?>">
                    <input type="hidden" class="form-control" id="agama" name="agama" required value="<?= $s['agama']?>">
                    <input type="hidden" class="form-control" id="status" name="status" required value="<?= $s['status_perkawinan']?>">
                    <input type="hidden" class="form-control" id="pekerjaan" name="pekerjaan" required value="<?= $s['pekerjaan']?>">
                    <input type="hidden" class="form-control" id="alamat" name="alamat" required value="<?= $s['alamat']?> Rt.<?= $s['rt']?> Rw.<?= $s['rw']?>">
                    <input type="text" class="form-control" id="nama_warga" name="nama_warga" required value="<?= $s['nama_kk']?>">
                </div>
                <div class="form-group">
                    <label>NIK</label>
                    <input type="number" class="form-control" id="NIK"name="NIK" required value="<?=$s['nik']?>">
                </div>
                <div class="form-group">
                    <label>No KK</label>
                    <input type="text" class="form-control" id="no_kk"name="no_kk" required value="<?= $s['no_kk']?>">
                </div>
                <div class="form-group">
                <label>Keperluan</label>
                <select name="keperluan" id="keperluan" class="form-control">
                    <option value="">Pilih Kepeluan</option>
                    <?php 
                    $xc = mysqli_query($xx,"SELECT * FROM tbl_keperluan ");
                    while($n = mysqli_fetch_assoc($xc)){
                    ?>
                    <option value="<?= $n['nama_keperluan']?>"><?= $n['nama_keperluan']?></option>
                    <?php } ?>
                </select>
                </div>

                <hr class="sidebar-divider d-none d-md-block">
                <button type="submit" class="btn btn-primary" name="buat">Buat Surat</button>
                </form>
            </div>
            <p class="text-danger">*setelah membuat surat segera datang ke balai desa</p>
                    </div>
                    </div>
                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Aplikasi Surat</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
</body>

</html>