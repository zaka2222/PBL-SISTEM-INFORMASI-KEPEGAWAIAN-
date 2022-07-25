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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include ('../pilih_riwayat/header.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-12">
                       <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Dokumen Elektronik / SK</li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                          <div class="card shadow mb-4 border-bottom-primary">
                            <div class="card-body">
<!--
    <nav class="navbar navbar-expand navbar-light bg-light mb-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Surat Keputusan</a>
                <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="riwayat.php">Surat Keputusan</a>
                    <a class="dropdown-item" href="nidn.php">NIDN</a>
                    <a class="dropdown-item" href="no_reg_serdos.php">No.Registrasi Serdos</a>
                </div>
            </li>
        </ul>
    </nav>
-->

<nav class="navbar navbar-expand navbar-light bg-light mb-4">
        <label><b>Silahkan Pilih</b></label>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Surat Keputusan</a>
                <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="pribadi.php?nip_nup=<?php echo $_GET['nip_nup']; ?>">Dokumen Pribadi</a>
                    <a class="dropdown-item" href="panduan.php">Panduan</a>
                </div>
            </li>
        </ul>
    </nav>

<a href="../index.php?nip_nup=<?php echo $_GET['nip_nup']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-chevron-left"></i> Kembali</a><br><br>
                                 <label><b>Surat Keputusan</b> :</label>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="50%">Jenis SK</th>
                </tr>
            </thead>
            <tbody>
               <?php

                    $data_sk = mysqli_query($koneksi,"select * from data_sk where nip_nup='$_GET[nip_nup]'");
                    while($data = mysqli_fetch_array($data_sk)){
     
                ?> 
                    <tr>
                        <td><?php echo $data['jenis_sk']; ?></td>
                        <td>


                                <?php
                                        $file_sk = $data['file_sk'];
                                        $cek = strpos($file_sk, ".pdf");
                                        $cek2 = strpos($file_sk, ".jpg");
                                        $cek3 = strpos($file_sk, ".png");
                                        $cek4 = strpos($file_sk, ".jpeg");
                                        ?>
                      
                                    <?php if ($cek >=1): ?>
                                    <a href="../../../login_pegawai/pilih_riwayat/view_sk.php?file_sk=<?php echo $data['file_sk']; ?>">
                                        <label style="color: blue;"><?php echo $data['file_sk']; ?></label><p>
                                    </a>

                                     <?php elseif ($cek2>=1): ?>
                                    <a href="#muncul3<?php echo $data['id_sk']; ?>" data-toggle="modal">
                                         <img src="../../../login_pegawai/riwayat/file_sk/<?php echo $data['file_sk']; ?>" class="img-fluid shadow" style="width: 180px;"></p>
                                    </a>

                                      <?php elseif ($cek3>=1): ?>
                                    <a href="#muncul3<?php echo $data['id_sk']; ?>" data-toggle="modal">
                                         <img src="../../../login_pegawai/riwayat/file_sk/<?php echo $data['file_sk']; ?>" class="img-fluid shadow" style="width: 180px;"></p>
                                    </a>

                                      <?php elseif ($cek4>=1): ?>
                                    <a href="#muncul3<?php echo $data['id_sk']; ?>" data-toggle="modal">
                                         <img src="../../../login_pegawai/riwayat/file_sk/<?php echo $data['file_sk']; ?>" class="img-fluid shadow" style="width: 180px;"></p>
                                    </a>

                                         <?php else: ?>
                                          <label style="color: red"><em>Tidak Memiliki Sumber File</em></label>
                                          
                                <?php endif ?> <P>

                            <form method="post" action="aksi_upload_sk.php" enctype="multipart/form-data">


                                <dd class="h6" style="font-weight: normal; color: red"><i>*Format Berkas ; PDF (Ukuran max: 5MB)</i></dd>

                                <a class="btn btn-success btn-xs" href="download_sk.php?file_sk=<?php echo $data['file_sk']; ?>" data-toggle="tooltip" title="download"><i class="fa fa-download"></i></a><p>
                            </form>

                            <!-- Modal-->
    <div class="modal fade" id="muncul3<?php echo $data['id_sk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <input type="hidden" name="id_sk" value="<?php echo $data['id_sk'] ?>">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <img src="../../../login_pegawai/riwayat/file_sk/<?php echo $data['file_sk']; ?>" class="img-fluid shadow" style="width: 500px;">
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>  

                            </td>
                        </tr>
                    <?php } ?>  

                </tbody>
              </table>
                                                                
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include ('../footer.php'); ?>
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