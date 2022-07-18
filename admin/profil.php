<?php include'header.php'; 
// $ss = mysqli_query($xx,"SELECT * FROM tbl_admin ORDER BY id_adm DESC");
// $p = mysqli_fetch_assoc($ss);
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
                        <h6 class="m-0 font-weight-bold text-primary">Pengaturan</h6>
                        </div>
                    <div class="card-body">
                    <?php 
                        $sqli = mysqli_query($xx,"SELECT * FROM tbl_admin ORDER BY id_adm DESC");
                        while($d = mysqli_fetch_array($sqli)){
                    ?>
                    <form action="updateProfil.php" method="POST">
                        <div class="form-group">
                        <input type="hidden" class="form-control" id="id_adm" name="id_adm" required value="<?= $d['id_adm'];?>">
                        <label for="exampleInputEmail2">Nama Admin</label>
                        <input type="text" class="form-control" id="nama_adm" name="nama_adm" required value="<?= $d['nama_adm'];?>">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1">Email Admin</label>
                        <input type="text" class="form-control" id="email_adm" name="email_adm" required value="<?= $d['email_adm'];?>">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="text" class="form-control" id="password"name="password" required value="<?= $d['password'];?>">
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