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

                <?php include ('../pilih_riwayat/header.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-12">
                       <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Dashboard / Detail Keluarga</li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                              $sk_i=$koneksi->query("SELECT * FROM data_keluarga WHERE id_keluarga='$_GET[id_keluarga]'");
                              $data=mysqli_fetch_assoc($sk_i);
                            ?>
                 
                            <div class="card shadow mb-4 border-bottom-primary">
                                <div class="card-body">


            <div class="form-group row">
                <div class="col-sm-12"><center>
                            <?php
                                        $file = $data['file'];
                                        $cek = strpos($file, ".pdf");
                                        $cek2 = strpos($file, ".jpg");
                                        $cek3 = strpos($file, ".png");
                                        $cek4 = strpos($file, ".jpeg");
                                        ?>
                      
                                    <?php if ($cek >=1): ?>

                                    <a href="view.php?file=<?php echo $data['file']; ?>">
                                         <label style="color: red;"><?php echo $data['file']; ?></label>
                                         <p>
                                    </a>
                                       
                                     <?php elseif ($cek2>=1): ?>

                                        <a href="#muncul<?php echo $data['id_keluarga']; ?>" data-toggle="modal">
                                          <img src="../keluarga/file/<?php echo $data['file']; ?>" class="img-fluid shadow" style="width: 500px;"></p>
                                        </a>

                                      <?php elseif ($cek3>=1): ?>

                                        <a href="#muncul<?php echo $data['id_keluarga']; ?>" data-toggle="modal">
                                          <img src="../keluarga/file/<?php echo $data['file']; ?>" class="img-fluid shadow" style="width: 500px;"></p>
                                        </a>

                                      <?php elseif ($cek4>=1): ?>

                                        <a href="#muncul<?php echo $data['id_keluarga']; ?>" data-toggle="modal">
                                          <img src="../keluarga/file/<?php echo $data['file']; ?>" class="img-fluid shadow" style="width: 500px;"></p>
                                        </a>
                                          <?php else: ?>
                                          <label style="color: red"><em>Tidak Memiliki Sumber File</em></label>
                                          
                                <?php endif ?> <P>
                    <label for="nip" class="col-sm-3 col-form-label"><b>File Akte Kelahiran</b></label>
                </center></div>
            </div>


            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label"><b>NIK</b></label>
                <div class="col-sm-9">
                    <label for="nip" class="col-sm-3 col-form-label">:&nbsp;<?php echo $data['nik'];?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label"><b>Nama</b></label>
                <div class="col-sm-9">
                    <label for="nip" class="col-sm-3 col-form-label">:&nbsp;<?php echo $data['nama'];?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label"><b>Jenis Kelamin</b></label>
                <div class="col-sm-9">
                    <label for="nip" class="col-sm-3 col-form-label">:&nbsp;<?php echo $data['jk'];?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label"><b>Tempat, Tanggal Lahir</b></label>
                <div class="col-sm-9">
                    <label for="nip" class="col-sm-3 col-form-label">:&nbsp;<?php echo $data['tempat_lahir'];?>, &nbsp;<?php echo date('d-m-Y', strtotime($data["tanggal_lahir"]));   ?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label"><b>Pekerjaan</b></label>
                <div class="col-sm-9">
                    <label for="nip" class="col-sm-3 col-form-label">:&nbsp;<?php echo $data['pekerjaan'];?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label"><b>Status</b></label>
                <div class="col-sm-9">
                    <label for="nip" class="col-sm-3 col-form-label">:&nbsp;<?php echo $data['status'];?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label"><b>Alamat Rumah</b></label>
                <div class="col-sm-9">
                    <label for="nip" class="col-sm-3 col-form-label">:&nbsp;<?php echo $data['alamat_rmh'];?></label>
                </div>
            </div>


        <!-- disini tanda tempat form -->
        <div class="card-footer">
            <button class="btn btn-warning" type="button" onclick="history.back();"><i class="fas fa-fw fa-chevron-left"></i> Kembali</button>
        </div>
                                    
<!--  Modal-->
    <div class="modal fade" id="muncul<?php echo $data['id_keluarga'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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