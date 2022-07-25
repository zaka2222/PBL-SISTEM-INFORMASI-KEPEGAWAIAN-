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
                            <li class="breadcrumb-item active" aria-current="page">Data Pegawai / Dokumen Elektronik</li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                          <div class="card shadow mb-4 border-bottom-primary">
                            <div class="card-body">

<?php
    $nipnup=$koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$_GET[nip_nup]'");
    $data=mysqli_fetch_assoc($nipnup);
?>

    <nav class="navbar navbar-expand navbar-light bg-light mb-4">
        <label><b>Silahkan Pilih</b></label>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dokumen Pribadi</a>
                <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="riwayat.php?nip_nup=<?php echo $_GET['nip_nup']; ?>">Dokumen Surat Keputusan</a>
                    <a class="dropdown-item" href="panduan.php">Panduan</a>
                </div>
            </li>
        </ul>
    </nav>

<a href="../index.php?nip_nup=<?php echo $_GET['nip_nup']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-chevron-left"></i> Kembali</a><p>

                            <table class="table table-bordered">
                                <tr>
                                    <td width="50%"><b>Kartu Tanda Penduduk</b> :</td>
                                    
                                    <td>
                                        <form method="post" action="aksi_upload_ktp.php" enctype="multipart/form-data">

                                            <input type="hidden" class="form-control" name="nip_nup" value="<?php echo $data['nip_nup']; ?>" required>

                                            <input type="hidden" class="form-control" name="nama_pegawai" value="<?php echo $data['nama_pegawai']; ?>" required>

                                            <a href="../../../login_pegawai/dokumen_e/view_ktp.php?file_ktp=<?php echo $data['file_ktp']; ?>">
                                            <label style="color: blue;"><?php echo $data['file_ktp']; ?></label><p>
                                            </a>

                                            <!--<a href="#muncul6<?php echo $data['nip_nup']; ?>" data-toggle="modal">
                                            <img src="../../../login_pegawai/dokumen_e/pribadi/KTP/<?php echo $data['file_ktp']; ?>" class="img-fluid shadow" alt="File KTP" style="width: 180px;"></p>
                                            </a>--><br>

                                            <dd class="h6" style="font-weight: normal; color: red"><i>*Format Berkas ; PDF (Ukuran max: 5MB)</i></dd>

                                            <a class="btn btn-success btn-xs" href="download_ktp.php?file_ktp=<?php echo $data['file_ktp']; ?>" data-toggle="tooltip" title="download"><i class="fa fa-download"></i></a>


                                            <p>

                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Kartu Keluarga</b> :</td>
                                    
                                    <td>
                                        
                                <form method="post" action="aksi_upload_kk.php" enctype="multipart/form-data">

                                    <a href="../../../login_pegawai/dokumen_e/view_kk.php?file_kk=<?php echo $data['file_kk']; ?>">
                                            <label style="color: blue;"><?php echo $data['file_kk']; ?></label><p>
                                    </a>
<!--

                                    <a href="#muncul5<?php echo $data['nip_nup']; ?>" data-toggle="modal">
                                    <img src="../../../login_pegawai/dokumen_e/pribadi/KK/<?php echo $data['file_kk']; ?>" class="img-fluid shadow" alt="File KK" style="width: 180px;"></p>
                                    </a>--><br>

                                        <dd class="h6" style="font-weight: normal; color: red"><i>*Format Berkas ; PDF (Ukuran max: 5MB)</i></dd>

                                    <a class="btn btn-success btn-xs" href="download_kk.php?file_kk=<?php echo $data['file_kk']; ?>" data-toggle="tooltip" title="download"><i class="fa fa-download"></i></a>


                                    <p>

                                </form>
  <!-- 
    <div class="modal fade" id="muncul5<?php echo $data['nip_nup'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <input type="hidden" name="nip_nup" value="<?php echo $data['nip_nup'] ?>">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <img src="../../../login_pegawai/dokumen_e/pribadi/KK/<?php echo $data['file_kk']; ?>" class="img-fluid shadow" style="width: 500px;">
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="muncul6<?php echo $data['nip_nup'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <input type="hidden" name="nip_nup" value="<?php echo $data['nip_nup'] ?>">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <img src="../../../login_pegawai/dokumen_e/pribadi/KTP/<?php echo $data['file_ktp']; ?>" class="img-fluid shadow" style="width: 500px;">
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>  -->
                                    </td>
                                </tr> 
                            </table>


              <label><b>Keluarga</b> :</label>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="50%">File Akta Kelahiran</th>
                </tr>
            </thead>
            <tbody>
               <?php

                    $data_keluarga = mysqli_query($koneksi,"select * from data_keluarga where nip_nup='$_GET[nip_nup]'");
                    while($data = mysqli_fetch_array($data_keluarga)){
     
                ?> 
                    <tr>
                        <td><?php echo $data['nama']; ?></td>
                        <td>


                                <?php
                                        $file = $data['file'];
                                        $cek = strpos($file, ".pdf");
                                        $cek2 = strpos($file, ".jpg");
                                        $cek3 = strpos($file, ".png");
                                        $cek4 = strpos($file, ".jpeg");
                                        ?>
                      
                                    <?php if ($cek >=1): ?>
                                    <a href="../keluarga/view.php?file=<?php echo $data['file']; ?>">
                                        <label style="color: blue;"><?php echo $data['file']; ?></label><p>
                                    </a>

                                     <?php elseif ($cek2>=1): ?>
                                    <a href="#muncul3<?php echo $data['id_keluarga']; ?>" data-toggle="modal">
                                         <img src="../keluarga/file/<?php echo $data['file']; ?>" class="img-fluid shadow" style="width: 180px;"></p>
                                    </a>

                                      <?php elseif ($cek3>=1): ?>
                                    <a href="#muncul3<?php echo $data['id_keluarga']; ?>" data-toggle="modal">
                                         <img src="../keluarga/file/<?php echo $data['file']; ?>" class="img-fluid shadow" style="width: 180px;"></p>
                                    </a>

                                      <?php elseif ($cek4>=1): ?>
                                    <a href="#muncul3<?php echo $data['id_keluarga']; ?>" data-toggle="modal">
                                         <img src="../keluarga/file/<?php echo $data['file']; ?>" class="img-fluid shadow" style="width: 180px;"></p>
                                    </a>

                                         <?php else: ?>
                                          <label style="color: red"><em>Tidak Memiliki Sumber File</em></label>
                                          
                                <?php endif ?> <P>

                            <form method="post" action="aksi_upload_kel.php" enctype="multipart/form-data">

                                <input type="hidden" class="form-control" name="id_keluarga" value="<?php echo $data['id_keluarga']; ?>" required>

                                <input type="hidden" class="form-control" name="nip_nup" value="<?php echo $data['nip_nup']; ?>" required>

                                <input type="hidden" class="form-control" name="nik" value="<?php echo $data['nik']; ?>" required>
                                <input type="hidden" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" required>
<!--
                                <input class="input-group" type="file" name="file"/>-->

                                <dd class="h6" style="font-weight: normal; color: red"><i>*Format Berkas ; PDF (Ukuran max: 5MB)</i></dd><!--
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
-->
                                <a class="btn btn-success btn-xs" href="download_kel.php?file=<?php echo $data['file']; ?>" data-toggle="tooltip" title="download"><i class="fa fa-download"></i></a><p>
                            </form>

                            <!-- Modal
    <div class="modal fade" id="muncul3<?php echo $data['id_keluarga'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <input type="hidden" name="id_keluarga" value="<?php echo $data['id_keluarga'] ?>">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <img src="../keluarga/file/<?php echo $data['file']; ?>" class="img-fluid shadow" style="width: 500px;">
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>  -->

                            </td>
                        </tr>
                    <?php } ?>  

                </tbody>
              </table>


            <label><b>IJAZAH</b> :</label>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="50%">Universitas (Tingkat Pendidikan)</th>
                </tr>
            </thead>
            <tbody>
               <?php

                    $riwayat_pendidikan = mysqli_query($koneksi,"select * from riwayat_pendidikan where nip_nup='$_GET[nip_nup]'");
                    while($data = mysqli_fetch_array($riwayat_pendidikan)){
     
                ?> 
                    <tr>
                        <td><?php echo $data['nama_universitas']; ?> (<?php echo $data['tingkat_pendidikan']; ?>)</td>
                        <td>


                                <?php
                                        $file_ijazah = $data['file_ijazah'];
                                        $cek = strpos($file_ijazah, ".pdf");
                                        $cek2 = strpos($file_ijazah, ".jpg");
                                        $cek3 = strpos($file_ijazah, ".png");
                                        $cek4 = strpos($file_ijazah, ".jpeg");
                                        ?>
                      
                                    <?php if ($cek >=1): ?>
                                    <a href="../../../login_pegawai/pendidikan/view.php?file_ijazah=<?php echo $data['file_ijazah']; ?>">
                                        <label style="color: blue;"><?php echo $data['file_ijazah']; ?></label><p>
                                    </a>

                                     <?php elseif ($cek2>=1): ?>
                                    <a href="#muncul3<?php echo $data['id_pendidikan']; ?>" data-toggle="modal">
                                         <img src="../../../login_pegawai/pendidikan/file_ijazah/<?php echo $data['file_ijazah']; ?>" class="img-fluid shadow" style="width: 180px;"></p>
                                    </a>

                                      <?php elseif ($cek3>=1): ?>
                                    <a href="#muncul3<?php echo $data['id_pendidikan']; ?>" data-toggle="modal">
                                         <img src="../../../login_pegawai/pendidikan/file_ijazah/<?php echo $data['file_ijazah']; ?>" class="img-fluid shadow" style="width: 180px;"></p>
                                    </a>

                                      <?php elseif ($cek4>=1): ?>
                                    <a href="#muncul3<?php echo $data['id_pendidikan']; ?>" data-toggle="modal">
                                         <img src="../../../login_pegawai/pendidikan/file_ijazah/<?php echo $data['file_ijazah']; ?>" class="img-fluid shadow" style="width: 180px;"></p>
                                    </a>

                                         <?php else: ?>
                                          <label style="color: red"><em>Tidak Memiliki Sumber File</em></label>
                                          
                                <?php endif ?> <P>

                            <form method="post" action="aksi_upload_ijazah.php" enctype="multipart/form-data">


                                 <dd class="h6" style="font-weight: normal; color: red"><i>*Format Berkas ; PDF (Ukuran max: 5MB)</i></dd>

                                <a class="btn btn-success btn-xs" href="download.php?file_ijazah=<?php echo $data['file_ijazah']; ?>" data-toggle="tooltip" title="download"><i class="fa fa-download"></i></a><p>
                            </form>

                            <!--
    <div class="modal fade" id="muncul3<?php echo $data['id_pendidikan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <input type="hidden" name="id_pendidikan" value="<?php echo $data['id_pendidikan'] ?>">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <img src="../../../login_pegawai/pendidikan/file_ijazah/<?php echo $data['file_ijazah']; ?>" class="img-fluid shadow" style="width: 500px;">
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>  -->

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