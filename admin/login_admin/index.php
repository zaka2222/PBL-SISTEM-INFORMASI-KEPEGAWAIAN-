<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MYDATA POLITAP - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="icon" type="img/png" href="../img/pol.png" sizes="16x16">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               
                <?php include ('header.php'); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-12">
                       <ol class="breadcrumb">
                            <a href="data_pegawai.php"><li class="breadcrumb-item active" aria-current="page">Data Pegawai</li></a>&nbsp;/&nbsp; 
                            <li class="breadcrumb-item active" aria-current="page"> Detail Pegawai</li>
                        </ol>
                        <a href="laporan.php?nip_nup=<?php echo $_GET['nip_nup']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Cetak Semua Data</a>

                    </div>

                   

                    <div class="row">
                        <?php include ('foto.php'); ?>

                        <div class="col-md-9">
                            <div class="card shadow mb-4 border-bottom-primary">
                                <div class="card-body">

                                                               
                                        <ul class="nav nav-tabs">
                                            <li><a class="nav-link active" href=""><b>Profil</b></a></li>
                                            <li><a class="nav-link" href="keluarga.php?nip_nup=<?php echo $_GET['nip_nup']; ?>"><b>Keluarga</b></a></li>
                                            <li><a class="nav-link" href="pendidikan.php?nip_nup=<?php echo $_GET['nip_nup']; ?>"><b>Pendidikan</b></a></li>
                                            <li><a class="nav-link" href="riwayat.php?nip_nup=<?php echo $_GET['nip_nup']; ?>"><b>Riwayat</b></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="profil" class="tab-pane fade show active"><p>
                                                
<?php
    $nipnup=$koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$_GET[nip_nup]'");
    $data=mysqli_fetch_assoc($nipnup);
?>
<table class="table table-bordered">
    <tr>
        <td width="30%"><b>NIP/NUP</b></td>
        
        <td>&nbsp;<?php echo $data['nip_nup']; ?></td>
    </tr>
    <tr>
        <td><b>Nama Lengkap</b></td>
        
        <td>&nbsp;<?php echo $data['nama_pegawai']; ?></td>
    </tr>

    <tr>
        <td><b>Tempat, Tanggal Lahir</b></td>
        <?php 
        $tanggal_lahir=date('d-m-Y', strtotime($data["tanggal_lahir"]));
        ?>
        <td>&nbsp;<?php echo $data['tempat_lahir']; ?> 
                        <?php 
                            if ($data['tanggal_lahir']=='0000-00-00') {
                            echo "-";
                            }else{
                            echo ", $tanggal_lahir
                            ";
                        } ?> 
        </td>

    </tr>
    <tr>
        <td><b>Jenis Kelamin</b></td>
        
        <td>&nbsp;<?php echo $data['jenis_kelamin']; ?></td>
    </tr>
    <tr>
        <td><b>Agama</b></td>
        
        <td>&nbsp;<?php echo $data['agama']; ?></td>
    </tr>
    <tr>
        <td><b>No.KTP</b></td>
        
        <td>&nbsp;<?php echo $data['no_ktp']; ?></td>
    </tr>
    <tr>
        <td><b>No.Kartu Keluarga</b></td>
        
        <td>&nbsp;<?php echo $data['no_kk']; ?></td>
    </tr>
    <tr>
        <td><b>NPWP</b></td>
        
        <td>&nbsp;<?php echo $data['npwp']; ?></td>
    </tr>
    <tr>
        <td><b>Status Pernikahan</b></td>
        
        <td>&nbsp;<?php echo $data['status_pernikahan']; ?></td>
    </tr>
    <tr>
        <td><b>No.Surat nikah, Tanggal</b></td>
        <?php 
        $tanggal_nikah=date('d-m-Y', strtotime($data["tanggal_nikah"]));
        ?>
        <td>&nbsp;<?php echo $data['no_surat_nikah']; ?> 
                        <?php 
                            if ($data['tanggal_nikah']=='0000-00-00') {
                            echo "-";
                            }else{
                            echo ", $tanggal_nikah
                            ";
                        } ?> 
        </td>

    </tr>
    <tr>
        <td><b>No.Surat Cerai, Tanggal</b></td>
        <?php 
        $tanggal_cerai=date('d-m-Y', strtotime($data["tanggal_cerai"]));
        ?>
        <td>&nbsp;<?php echo $data['no_surat_cerai']; ?> 
                        <?php 
                            if ($data['tanggal_cerai']=='0000-00-00') {
                            echo "-";
                            }else{
                            echo ", $tanggal_cerai
                            ";
                        } ?> 
        </td>

    </tr>
    <tr>
        <td><b>Alamat</b></td>
        
        <td>&nbsp;<?php echo $data['alamat_rmh']; ?></td>
    </tr>
    <tr>
        <td><b>No.HP</b></td>
        
        <td>&nbsp;<?php echo $data['no_hp']; ?></td>
    </tr>
    <tr>
        <td><b>Email</b></td>
        
        <td>&nbsp;<?php echo $data['email']; ?></td>
    </tr>
    <tr>
        <td><b>Status Pegawai</b></td>
        
        <td>&nbsp;<?php echo $data['status_pegawai']; ?></td>
    </tr>
    <tr>
        <td><b>Jumlah Anak</b></td>
        
        <td>&nbsp;<?php echo $data['jmlh_anak']; ?></td>
    </tr>
    <tr>
        <td><b>BPJS Kesehatan</b></td>
        
        <td>&nbsp;<?php echo $data['no_bpjs_kesehatan']; ?></td>
    </tr>
    <tr>
        <td><b>BPJS Ketenagakerjaan</b></td>
        
        <td>&nbsp;<?php echo $data['no_bpjs_ketenagakerjaan']; ?></td>
    </tr>
</table>

<label><b>NIDN</b></label>

<table class="table table-bordered">
    <tr>
        <td width="30%"><b>Nomor SK</b></td>
        
        <td>&nbsp;<?php echo $data['no_sk_nidn']; ?></td>
    </tr>

    <tr>
        <td><b>TMT</b></td>
        <?php 
        $tmt_nidn=date('d-m-Y', strtotime($data["tmt_nidn"]));
        ?>
        <td>&nbsp;<?php 
                            if ($data['tmt_nidn']=='0000-00-00') {
                            echo "-";
                            }else{
                            echo "$tmt_nidn
                            ";
                        } ?> 
        </td>

    </tr>

    <tr>
        <td><b>Tanggal SK</b></td>
        <?php 
        $tgl_sk_nidn=date('d-m-Y', strtotime($data["tgl_sk_nidn"]));
        ?>
        <td>&nbsp;<?php 
                            if ($data['tgl_sk_nidn']=='0000-00-00') {
                            echo "-";
                            }else{
                            echo "$tgl_sk_nidn
                            ";
                        } ?> 
        </td>

    </tr>

</table>

<label><b>NITK</b></label>

<table class="table table-bordered">
    <tr>
        <td width="30%"><b>Nomor SK</b></td>
        
        <td>&nbsp;<?php echo $data['no_sk_ntik']; ?></td>
    </tr>

    <tr>
        <td><b>TMT</b></td>
        <?php 
        $tmt_ntik=date('d-m-Y', strtotime($data["tmt_ntik"]));
        ?>
        <td>&nbsp;<?php 
                            if ($data['tmt_ntik']=='0000-00-00') {
                            echo "-";
                            }else{
                            echo "$tmt_ntik
                            ";
                        } ?> 
        </td>

    </tr>

    <tr>
        <td><b>Tanggal SK</b></td>
        <?php 
        $tgl_sk_ntik=date('d-m-Y', strtotime($data["tgl_sk_ntik"]));
        ?>
        <td>&nbsp;<?php 
                            if ($data['tgl_sk_ntik']=='0000-00-00') {
                            echo "-";
                            }else{
                            echo "$tgl_sk_ntik
                            ";
                        } ?> 
        </td>

    </tr>

</table>

                                            </div>
                                            <div id="keluarga" class="tab-pane fade">
                                              
                                            </div>
                                            <div id="pendidikan" class="tab-pane fade">
                                               
                                            </div>
                                            <div id="riwayat" class="tab-pane fade">
                                               
                                            </div>
                                        </div>
                                    

                                    

                                </div>
                            </div>
                        </div>
                    </div>

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



            <!-- Footer -->
            <?php include ('footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>