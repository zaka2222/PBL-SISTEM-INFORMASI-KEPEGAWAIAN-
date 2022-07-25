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
                            <li class="breadcrumb-item active" aria-current="page">Dashboard / Ubah No.Registrasi Serdos</li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                              $no_rs=$koneksi->query("SELECT * FROM no_reg_serdos WHERE id_no_reg_serdos='$_GET[id_no_reg_serdos]'");
                              $data=mysqli_fetch_assoc($no_rs);
                            ?>
                 
                            <div class="card shadow mb-4 border-bottom-primary">
                                <div class="card-body">

 <form method="POST" action="aksi_ubah_no_rs.php?nip_nup=<?php echo $data['nip_nup']; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label">Nomor</label>
                <div class="col-sm-9">

                    <input type="hidden" name="id_no_reg_serdos" class="form-control" placeholder="id_no_reg_serdos  *" value= "<?php echo $data['id_no_reg_serdos'];?>" title="id_no_reg_serdos " readonly>

                    <input type="hidden" name="nip_nup" class="form-control" placeholder="nip_nup  *" value= "<?php echo $data['nip_nup'];?>" title="nip_nup " readonly>



                    <input type="text" name="nomor" class="form-control" placeholder="Nomor  *" value= "<?php echo $data['nomor'];?>" title="Nomor " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Tanggal</label>
                <div class="col">
                    <input type="date" name="tgl" class="form-control" placeholder="tgl  *" value= "<?php echo $data['tgl'];?>" title="Tanggal " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Tempat</label>
                <div class="col">
                    <input type="text" name="tempat" class="form-control" placeholder="Tempat  *" value= "<?php echo $data['tempat'];?>" title="Tempat " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Tahun Pendapatan</label>
                <div class="col">
                    <input type="text" name="tahun_pendapatan" class="form-control" placeholder="Tahun Pendapatan  *" value= "<?php echo $data['tahun_pendapatan'];?>" title="Tahun Pendapatan " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Bidang Ilmu</label>
                <div class="col">
                    <input type="text" name="bidang_ilmu" class="form-control" placeholder="Bidang Ilmu  *" value= "<?php echo $data['bidang_ilmu'];?>" title="Bidang Ilmu " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
<!--
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">File</label>
                <div class="col-sm-9">
                    <?php echo $data['file_nrs'];?><br>
                    <input class="input-group" type="file" name="file_nrs">

                    <dd class="h6" style="font-weight: normal; color: red"><i>*Format Berkas ; JPG,JPEG,PNG,PDF</i></dd>
                </div>
            </div>
-->
        <!-- disini tanda tempat form -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-fw fa-save"></i> Simpan</button>
            <a href="../pilih_riwayat/no_reg_serdos.php?nip_nup=<?php echo $data['nip_nup']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-chevron-left"></i> Kembali</a>
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