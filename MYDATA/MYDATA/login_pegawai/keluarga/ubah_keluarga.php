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
                              $keluarga=$koneksi->query("SELECT * FROM data_keluarga WHERE id_keluarga='$_GET[id_keluarga]'");
                              $data=mysqli_fetch_assoc($keluarga);
                            ?>
                 
                            <div class="card shadow mb-4 border-bottom-primary">
                                <div class="card-body">

 <form method="POST" action="aksi_ubah_kel2.php?id_keluarga=<?php echo $data['id_keluarga']; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label">NIK</label>
                <div class="col-sm-9">

                    <input type="hidden" name="id_keluarga" class="form-control" placeholder="id_keluarga  *" value= "<?php echo $data['id_keluarga'];?>" title="id_keluarga " readonly>
                    <input type="hidden" name="nip_nup" class="form-control" placeholder="nip_nup  *" value= "<?php echo $data['nip_nup'];?>" title="nip_nup " readonly>

                    <input type="text" name="nik" class="form-control" placeholder="NIK  *" value= "<?php echo $data['nik'];?>" title="NIK " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap  *" value= "<?php echo $data['nama'];?>" title="Nama Lengkap " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-9">
                    <div class="form-check d-inline mr-3">
                        <input class="form-check-input" type="radio" name="jk" value="Laki-laki"<?php if($data['jk']=='Laki-laki') echo 'checked'?>>
                        <label class="form-check-label">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="jk" value="Perempuan"<?php if($data['jk']=='Perempuan') echo 'checked'?>>
                        <label class="form-check-label">
                            Perempuan
                        </label>
                    </div>
                </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                <div class="col">
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir  *" value= "<?php echo $data['tempat_lahir'];?>" title="Tempat Lahir " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
                <div class="col">
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="tanggal_lahir  *" value= "<?php echo $data['tanggal_lahir'];?>" title="tanggal lahir " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-3 col-form-label">Pekerjaan</label>
                <div class="col-sm-9">
                    <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan Sesuai KTP  *" value= "<?php echo $data['pekerjaan'];?>" title="pekerjaan " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Status Dalam Keluarga</label>
                <div class="col-sm-9">
                    <select class="form-control" name="status" id="status">
                        <option value="Anak"<?php if($data['status'] == 'Anak'){ echo 'selected'; } ?>>Anak</option>
                        <option value="Saudara Kandung"<?php if($data['status'] == 'Saudara'){ echo 'selected'; } ?>>Saudara</option>
                        <option value="Ayah"<?php if($data['status'] == 'Ayah'){ echo 'selected'; } ?>>Ayah</option>
                        <option value="Ibu"<?php if($data['status'] == 'Ibu'){ echo 'selected'; } ?>>Ibu</option>
                        <option value="Suami"<?php if($data['status'] == 'Suami'){ echo 'selected'; } ?>>Suami</option>
                        <option value="Istri"<?php if($data['status'] == 'Istri'){ echo 'selected'; } ?>>Istri</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alamat Rumah</label>
                <div class="col-sm-9">
                    <textarea name="alamat_rmh" class="form-control" cols="10" rows="3"  required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')"><?php echo $data['alamat_rmh'];?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">File Akta Kelahiran</label>
                <div class="col-sm-9">
                    <label style="color: blue"><?php echo $data['file'];?></label><br>
                    <input class="input-group" type="file" name="file">

                    <dd class="h6" style="font-weight: normal; color: red"><i>*Format Berkas ; PDF (Ukuran max: 5MB)</i></dd>
                </div>
            </div>

        <!-- disini tanda tempat form -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-fw fa-save"></i> Simpan</button>
            <a href="../keluarga.php" class="btn btn-warning"><i class="fas fa-fw fa-chevron-left"></i> Kembali</a>
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