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
                            <li class="breadcrumb-item active" aria-current="page">Dashboard / Ubah Data Keluarga</li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                              $pendidikan=$koneksi->query("SELECT * FROM riwayat_pendidikan WHERE id_pendidikan='$_GET[id_pendidikan]'");
                              $data=mysqli_fetch_assoc($pendidikan);
                            ?>
                 
                            <div class="card shadow mb-4 border-bottom-primary">
                                <div class="card-body">

 <form method="POST" action="aksi_ubah_pen.php?nip_nup=<?php echo $data['nip_nup']; ?>&&id_pendidikan=<?php echo $data['id_pendidikan']; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label">No.Ijazah</label>
                <div class="col-sm-9">

                    <input type="hidden" name="id_pendidikan" class="form-control" placeholder="id_pendidikan  *" value= "<?php echo $data['id_pendidikan'];?>" title="id_pendidikan " readonly>
                    <input type="hidden" name="nip_nup" class="form-control" placeholder="nip_nup  *" value= "<?php echo $data['nip_nup'];?>" title="nip_nup " readonly>

                    <input type="text" name="no_ijazah" class="form-control" placeholder="No Ijazah  *" value= "<?php echo $data['no_ijazah'];?>" title="No Ijazah " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Tanggal Lulus</label>
                <div class="col">
                    <input type="date" name="tgl_lulus" class="form-control" placeholder="tgl_lulus  *" value= "<?php echo $data['tgl_lulus'];?>" title="Tanggal lulus " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_universitas" class="col-sm-3 col-form-label">Nama Universitas</label>
                <div class="col-sm-9">
                    <input type="text" name="nama_universitas" class="form-control" placeholder="Nama Universitas  *" value= "<?php echo $data['nama_universitas'];?>" title="Nama Universitas " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tingkat Pendidikan</label>
                <div class="col-sm-9">
                    <select class="form-control" name="tingkat_pendidikan" id="tingkat_pendidikan">
                        <option value="SD"<?php if($data['tingkat_pendidikan'] == 'SD'){ echo 'selected'; } ?>>SD</option>
                        <option value="SMP"<?php if($data['tingkat_pendidikan'] == 'SMP'){ echo 'selected'; } ?>>SMP</option>
                        <option value="SMA"<?php if($data['tingkat_pendidikan'] == 'SMA'){ echo 'selected'; } ?>>SMA</option>
                        <option value="D1"<?php if($data['tingkat_pendidikan'] == 'D1'){ echo 'selected'; } ?>>D1</option>
                        <option value="D2"<?php if($data['tingkat_pendidikan'] == 'D2'){ echo 'selected'; } ?>>D2</option>
                        <option value="D3"<?php if($data['tingkat_pendidikan'] == 'D3'){ echo 'selected'; } ?>>D3</option>
                        <option value="D4"<?php if($data['tingkat_pendidikan'] == 'D4'){ echo 'selected'; } ?>>D4</option>
                        <option value="S1"<?php if($data['tingkat_pendidikan'] == 'S1'){ echo 'selected'; } ?>>S1</option>
                        <option value="S2"<?php if($data['tingkat_pendidikan'] == 'S2'){ echo 'selected'; } ?>>S2</option>
                        <option value="S3"<?php if($data['tingkat_pendidikan'] == 'S3'){ echo 'selected'; } ?>>S3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">File Ijazah</label>
                <div class="col-sm-9">
                    <?php echo $data['file_ijazah'];?><br>
                    <input class="input-group" type="file" name="file_ijazah">

                                        <dd class="h6" style="font-weight: normal; color: red"><i>*Format Berkas ; PDF (Ukuran max: 5MB)</i></dd>
                </div>
            </div>

        <!-- disini tanda tempat form -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-fw fa-save"></i> Simpan</button>
            <a href="../pendidikan.php?nip_nup=<?php echo $data['nip_nup']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-chevron-left"></i> Kembali</a>
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