<?php
include "../koneksi.php";
// mengaktifkan session
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
$nipnup = $_SESSION['nip_nup'];
$pegawai=$koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$nipnup'");
$datalogin=mysqli_fetch_assoc($pegawai);

?>     
 <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

                    <!-- Sidebar - Brand -->
 
   
                <img src="../img/pol.png" width="4%">
          
                <div class="sidebar-brand-text mx-3" style="font-weight: normal; color: lightgreen;"><b>MYDATA <br>POLITAP </b></div>

                <div class="topbar-divider d-none d-sm-block"></div>


                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   <a class="nav-link" href="index.php">
                        <b><span class="mr-2 d-none d-lg-inline text-gray-600"><font color="white">Dashboard</font></span></b>
                    </a>

<?php
    $nipnup = $datalogin['nip_nup'];
    $pas=$koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$nipnup' AND ganti_sandi='T' AND notif='T'");
    $dass=mysqli_fetch_assoc($pas);
?>

<?php 
    error_reporting(0);
    if ($dass['ganti_sandi'] == "T") {?>
        

<?php }else{?>

                    <a class="nav-link" href="panduan.php">
                        <b><span class="mr-2 d-none d-lg-inline text-gray-600"><font color="white">Panduan</font></span></b>
                    </a>

                    <ul class="navbar-nav">

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <b><span class="mr-2 d-none d-lg-inline text-gray-600"><font color="white">Dokumen Elektronik</font></span>
                                    <i class="fas fa-fw fa-bars"></i></b>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="dokumen_e/pribadi.php">
                                     <i class="fas fa-fw fa-folder"></i>
                                    Pribadi
                                </a>
                                <a class="dropdown-item" href="dokumen_e/riwayat.php">
                                     <i class="fas fa-fw fa-folder"></i>
                                    Surat Keputusan
                                </a>
                                <a class="dropdown-item" href="dokumen_e/panduan.php">
                                     <i class="fas fa-fw fa-folder"></i>
                                    Panduan
                                </a>
                            </div>
                        </li>
                    </ul>

<?php } ?>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><font color="white"><?php echo $datalogin['nama_pegawai']; ?></font></b></span>

                                    <img src="img/foto_pegawai/<?php echo $datalogin['foto_pegawai']; ?>" class="img-profile rounded-circle">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">


                            <?php
                                $nipnup = $datalogin['nip_nup'];
                                $paswd=$koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$nipnup' AND ganti_sandi='T' AND notif='T'");
                                $daw=mysqli_fetch_assoc($paswd);
                            ?>

                            <?php 
                                error_reporting(0);
                                if ($dass['ganti_sandi'] == "T") {?>
                                    

                            <?php }else{?>

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#password">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ganti Password
                                </a>

                            <?php } ?>
                            
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sistem Informasi Pelayanan Kepegawaian</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Yakin Ingin Keluar ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>

                   <form action="logout.php" method="post">
                      <button type="submit" class="btn btn-primary">Ya</button>
                   </form>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form method="post" action="aksi_ubah_password.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="nip_nup" class="form-control" placeholder="NIP/NUP  *" value= "<?php echo $datalogin['nip_nup'];?>" title="NIP/NUP " readonly>

                            <input type="text" name="password" class="form-control" placeholder="Password  *" value= "<?php echo $datalogin['password'];?>" title="Password " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>

                   
                    <button type="submit" name="ubah_password" class="btn btn-primary">Simpan</button>
            </form>
                </div>
            </div>
        </div>
    </div>

