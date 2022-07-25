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
                            <li class="breadcrumb-item active" aria-current="page">Dashboard / Ubah SK Inpassing</li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                              $sk_i=$koneksi->query("SELECT * FROM data_sk WHERE id_sk='$_GET[id_sk]'");
                              $data=mysqli_fetch_assoc($sk_i);
                            ?>
                 
                            <div class="card shadow mb-4 border-bottom-primary">
                                <div class="card-body">

 <form method="POST" action="aksi_ubah_sk_i.php?nip_nup=<?php echo $data['nip_nup']; ?>&&id_sk=<?php echo $data['id_sk']; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label">Nomor</label>
                <div class="col-sm-9">

                    <input type="hidden" name="id_sk" class="form-control" placeholder="id_sk  *" value= "<?php echo $data['id_sk'];?>" title="id_sk " readonly>
                    <input type="hidden" name="nip_nup" class="form-control" placeholder="nip_nup  *" value= "<?php echo $data['nip_nup'];?>" title="nip_nup " readonly>


                    <input type="hidden" name="jenis_sk" class="form-control" placeholder="jenis_sk  *" value= "<?php echo $data['jenis_sk'];?>" title="jenis_sk " readonly>

                    <input type="text" name="nomor" class="form-control" placeholder="Nomor  *" value= "<?php echo $data['nomor'];?>" title="Nomor " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">TMT</label>
                <div class="col">
                    <input type="date" name="tmt" class="form-control" placeholder="tmt  *" value= "<?php echo $data['tmt'];?>" title="TMT " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Tanggal SK</label>
                <div class="col">
                    <input type="date" name="tgl_sk" class="form-control" placeholder="tgl_sk  *" value= "<?php echo $data['tgl_sk'];?>" title="Tanggal SK " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">File SK</label>
                <div class="col-sm-9">
                    <?php echo $data['file_sk'];?><br>
                    <input class="input-group" type="file" name="file_sk">
 
                    <dd class="h6" style="font-weight: normal; color: red"><i>*Format Berkas ; PDF (Ukuran max: 5MB)</i></dd>
                </div>
            </div>

        <!-- disini tanda tempat form -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-fw fa-save"></i> Simpan</button>
            <a href="../pilih_riwayat/sk_inpassing.php?nip_nup=<?php echo $data['nip_nup']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-chevron-left"></i> Kembali</a>
        </div>
    </form>                                    



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