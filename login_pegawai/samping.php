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

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
               
                <img src="../img/pol.png" width="50%">
          
                <div class="sidebar-brand-text mx-3">MYDATA POLITAP </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

<?php
    $nipnup = $datalogin['nip_nup'];
    $pas=$koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$nipnup' AND ganti_sandi='T' AND notif='T'");
    $dass=mysqli_fetch_assoc($pas);
?>

<?php 
    error_reporting(0);
    if ($dass['ganti_sandi'] == "T") {?>
        

<?php }else{?>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Dokumen Elektronik </span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="dokumen_e/pribadi.php">Pribadi</a>
                        <a class="collapse-item" href="dokumen_e/riwayat.php">Surat Keputusan</a>
                    </div>
                </div>
            </li>
<?php } ?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->