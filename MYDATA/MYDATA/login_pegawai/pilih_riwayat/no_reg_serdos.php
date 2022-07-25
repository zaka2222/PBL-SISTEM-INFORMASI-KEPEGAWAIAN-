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
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="icon" type="img/png" href="../../img/pol.png" sizes="16x16">

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
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                        <a href="../laporan.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Cetak Semua Data</a>
                    </div>

                   

                    <div class="row">
                        <?php include ('foto.php'); ?>

                        <div class="col-md-9">
                            <div class="card shadow mb-4 border-bottom-primary">
                                <div class="card-body">

                            
                                        
                                        <ul class="nav nav-tabs">
                                            <li><a class="nav-link " href="../index.php"><b>Profil</b></a></li>
                                            <li><a class="nav-link" href="../keluarga.php"><b>Keluarga</b></a></li>
                                            <li><a class="nav-link " href="../pendidikan.php"><b>Pendidikan</b></a></li>
                                            <li><a class="nav-link active" data-toggle="tab" href="../riwayat.php"><b>Riwayat</b></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="profil" class="tab-pane fade">
                                            
                                            </div>
                                            <div id="keluarga" class="tab-pane fade">
                                                
                                            </div>
                                            <div id="pendidikan" class="tab-pane fade ">
 
                                            </div>
                                            <div id="riwayat" class="tab-pane fade show active">                                     

  <div class="card-body">
    <nav class="navbar navbar-expand navbar-light bg-light mb-4">
        <left>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Silahkan Pilih : &nbsp;No.Registrasi Serdos</b>  </a>
                <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../riwayat.php">Penyesuaian Ijazah</a>
                    <a class="dropdown-item" href="sk_capeg_tetap.php"> Capeg</a>
                    <a class="dropdown-item" href="sk_tetap.php"> Tetap</a>
                    <a class="dropdown-item" href="sk_penyesuaian_masa.php">Penyesuaian Masa</a>
                    <a class="dropdown-item" href="sk_kenaikan_pangkat.php">Kenaikan Pangkat</a>
                    <a class="dropdown-item" href="sk_inpassing.php">Inpassing</a>
                     <a class="dropdown-item" href="sk_mutasi.php">Mutasi</a>
                    <!--<a class="dropdown-item" href="nidn.php">NIDN</a>-->
                    <a class="dropdown-item" href="gol_pang.php">Golongan/Pangkat</a>
                    <a class="dropdown-item" href="riwayat_jabatan_aka_fung.php">Jabatan Akademik/Fungsional</a>
                    <a class="dropdown-item" href="riwayat_jabatan_st_tt.php">Jabatan Struktural/Tugas Tambahan</a>
                    <a class="dropdown-item" href="riwayat_diklat.php">Diklat</a>
                </div>
            </li>
        </ul></left>
    </nav>
    <center><label><b>No.Registrasi Serdos </b></label></center><br>
    <div class="table-responsive">
        <a href="../riwayat/tambah_no_rs.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Data</a>
        <p>
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr><th>No</th>
                <th>Opsi</th>
                <th>Nomor</th>
                <th>Tanggal</th>
                <th>Penyelenggara, Tahun</th>
                <th>Bidang Ilmu</th>
            </tr>
        </thead>
        <tbody>
           <?php
                $no = 0;
                $nipnup = $datalogin['nip_nup'];
                $data_no_reg_serdos = mysqli_query($koneksi,"select * from no_reg_serdos where nip_nup='$nipnup'");
                while($data = mysqli_fetch_array($data_no_reg_serdos)){
                $no++;    
            ?> 
                <tr>
                    <td><?php echo $no;?></td>
            
                    <td class="actions" style="text-align:center;">
<!--
                        <a class="btn btn-primary btn-sm" href="detail_nrs.php?id_no_reg_serdos=<?php echo $data['id_no_reg_serdos']; ?>" title="Detail"><i class="fas fa-fw fa-eye"></i></a>
-->
                        <a class="btn btn-warning btn-sm" href="../riwayat/ubah_no_rs.php?id_no_reg_serdos=<?php echo $data['id_no_reg_serdos']; ?>" title="Ubah"><i class="fas fa-edit"></i></a>

                        <a class="btn btn-danger btn-sm" href="../riwayat/aksi_hapus_no_rs.php?id_no_reg_serdos=<?php echo $data['id_no_reg_serdos']; ?>" title="Hapus" onclick="return confirm('Yakin Ingin Mengapus Data ini ?')"><i class="fas fa-trash"></i></a>
                    </td>
                    <td><?php echo $data['nomor']; ?></td>
                    <td><?php echo date('d-m-Y', strtotime($data["tgl"]));   ?></td>
                    <td><?php echo $data['tempat']; ?>, <?php echo $data['tahun_pendapatan']; ?></td>
                    <td><?php echo $data['bidang_ilmu']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>





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
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sistem Informasi Pelayanan Kepegawaian Politeknik Negeri Ketapang</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>