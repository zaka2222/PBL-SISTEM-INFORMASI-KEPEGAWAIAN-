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

                    <div class="d-sm-flex align-items-center justify-content-between mb-12">
                       <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Dashboard / Ubah Data Pegawai</li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                              $nipnup=$koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$_GET[nip_nup]'");
                              $data=mysqli_fetch_assoc($nipnup);
                            ?>
                 
                            <div class="card shadow mb-4 border-bottom-primary">
                                <div class="card-body">
                                    
        <form method="POST" action="aksi_ubah_pegawai.php?nip_nup=<?php echo $data['nip_nup']; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label">NIP/NUP</label>
                <div class="col-sm-9">

                    <input type="text" name="nip_nup" class="form-control" placeholder="NIP/NUP  *" value= "<?php echo $data['nip_nup'];?>" title="NIP/NUP " readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" name="password" class="form-control" placeholder="Password  *" value= "<?php echo $data['password'];?>" title="Password " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_pegawai" class="col-sm-3 col-form-label">Nama Pegawai</label>
                <div class="col-sm-9">
                    <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai  *" value= "<?php echo $data['nama_pegawai'];?>" title="Nama Pegawai " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                <div class="col">
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir  *" value= "<?php echo $data['tempat_lahir'];?>" title="Tempat Lahir " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
                <div class="col">
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="tanggal_lahir  *" value= "<?php echo $data['tanggal_lahir'];?>" title="tanggal lahir " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-9">
                    <div class="form-check d-inline mr-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki"<?php if($data['jenis_kelamin']=='laki-laki') echo 'checked'?>>
                        <label class="form-check-label">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan"<?php if($data['jenis_kelamin']=='perempuan') echo 'checked'?>>
                        <label class="form-check-label">
                            Perempuan
                        </label>
                    </div>
                </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Agama</label>
                <div class="col-sm-9">
                    <select class="form-control" name="agama" id="agama">
                        <option value="Islam"<?php if($data['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
                        <option value="Kristen"<?php if($data['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen</option>
                        <option value="Katolik"<?php if($data['agama'] == 'Katolik'){ echo 'selected'; } ?>>Katolik</option>
                        <option value="Hindu"<?php if($data['agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
                        <option value="Buddha"<?php if($data['agama'] == 'Buddha'){ echo 'selected'; } ?>>Buddha</option>
                        <option value="Khonghucu"<?php if($data['agama'] == 'Khonghucu'){ echo 'selected'; } ?>>Khonghucu</option>
                        <option value="Lainnya"<?php if($data['agama'] == 'Lainnya'){ echo 'selected'; } ?>>Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-3 col-form-label">No.KTP</label>
                <div class="col-sm-9">
                    <input type="number" name="no_ktp" class="form-control" placeholder="no.ktp  *" value= "<?php echo $data['no_ktp'];?>" title="no_ktp " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-3 col-form-label">No.Kartu Keluarga</label>
                <div class="col-sm-9">
                    <input type="number" name="no_kk" class="form-control" placeholder="no_kk  *" value= "<?php echo $data['no_kk'];?>" title="no.kk " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-3 col-form-label">NPWP</label>
                <div class="col-sm-9">
                    <input type="number" name="npwp" class="form-control" placeholder="npwp  *" value= "<?php echo $data['npwp'];?>" title="npwp " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-3 pt-0">Status Pernikahan</legend>
                <div class="col-sm-9">
                    <div class="form-check d-inline mr-3">
                        <input class="form-check-input" type="radio" name="status_pernikahan" value="Menikah"<?php if($data['status_pernikahan']=='Menikah') echo 'checked'?>>
                        <label class="form-check-label">
                            Menikah
                        </label>
                    </div>
                    <div class="form-check d-inline">
                        <input class="form-check-input" type="radio" name="status_pernikahan" value="Belum Menikah"<?php if($data['status_pernikahan']=='Belum Menikah') echo 'checked'?>>
                        <label class="form-check-label">
                            Belum Menikah
                        </label>
                    </div>
                </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">No.Surat Nikah, Tanggal Nikah</label>
                <div class="col">
                    <input type="text" name="no_surat_nikah" class="form-control" placeholder="No.Surat Nikah  *" value= "<?php echo $data['no_surat_nikah'];?>" title="No.Surat Nikah ">
                </div>
                <div class="col">
                    <input type="date" name="tanggal_nikah" class="form-control" placeholder="tanggal nikah  *" value= "<?php echo $data['tanggal_nikah'];?>" title="tanggal nikah ">
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">No.Surat Cerai, Tanggal Cerai</label>
                <div class="col">
                    <input type="text" name="no_surat_cerai" class="form-control" placeholder="No.Surat Cerai  *" value= "<?php echo $data['no_surat_cerai'];?>" title="No.Surat cerai ">
                </div>
                <div class="col">
                    <input type="date" name="tanggal_cerai" class="form-control" placeholder="tanggal cerai  *" value= "<?php echo $data['tanggal_cerai'];?>" title="tanggal cerai ">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alamat Rumah</label>
                <div class="col-sm-9">
                    <textarea name="alamat_rmh" class="form-control" cols="10" rows="3"><?php echo $data['alamat_rmh'];?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-3 col-form-label">No. HP</label>
                <div class="col-sm-9">
                    <input type="number" name="no_hp" class="form-control" placeholder="No.HP  *" value= "<?php echo $data['no_hp'];?>" title="no_hp " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>

            <div class="form-group row">
                <label for="no_hp" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" name="email" class="form-control" placeholder="Email  *" value= "<?php echo $data['email'];?>" title="email " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Status Pegawai</label>
                <div class="col-sm-9">
                    <select class="form-control" name="status_pegawai" id="status_pegawai">
                        <option value="PPPK"<?php if($data['status_pegawai'] == 'PPPK'){ echo 'selected'; } ?>>PPPK</option>
                        <option value="PNS"<?php if($data['status_pegawai'] == 'PNS'){ echo 'selected'; } ?>>PNS</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-3 col-form-label">Jumlah Anak</label>
                <div class="col-sm-9">
                    <input type="number" name="jmlh_anak" class="form-control" placeholder="Jumlah Anak  *" value= "<?php echo $data['jmlh_anak'];?>" title="Jumlah Anak ">
                </div>
            </div>

        <!-- disini tanda tempat form -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-fw fa-save"></i> Simpan</button>
            <a href="index.php?nip_nup=<?php echo $_GET['nip_nup']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-chevron-left"></i> Kembali</a>
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