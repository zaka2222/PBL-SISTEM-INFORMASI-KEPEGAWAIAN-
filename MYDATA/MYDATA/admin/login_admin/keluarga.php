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
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                                            <li><a class="nav-link " href="index.php?nip_nup=<?php echo $_GET['nip_nup']; ?>"><b>Profil</b></a></li>
                                            <li><a class="nav-link  active" href="keluarga.php?nip_nup=<?php echo $_GET['nip_nup']; ?>"><b>Keluarga</b></a></li>
                                            <li><a class="nav-link" href="pendidikan.php?nip_nup=<?php echo $_GET['nip_nup']; ?>"><b>Pendidikan</b></a></li>
                                            <li><a class="nav-link" href="riwayat.php?nip_nup=<?php echo $_GET['nip_nup']; ?>"><b>Riwayat</b></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="profil" class="tab-pane fade">
                                            
                                            </div>
                                            <div id="keluarga" class="tab-pane fade  show active">
                                                

  <div class="card-body">
    <div class="table-responsive">
        <a href="keluarga/tambah_keluarga.php?nip_nup=<?php echo $_GET['nip_nup']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Data</a>
        <p>
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr><th>No</th>
                <th>Opsi</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
           <?php
                $no = 0;
                $data_keluarga = mysqli_query($koneksi,"select * from data_keluarga where nip_nup='$_GET[nip_nup]'");
                while($data = mysqli_fetch_array($data_keluarga)){
                $no++;    
            ?> 
                <tr>
                    <td><?php echo $no;?></td>
            
                    <td class="actions" style="text-align:center;">

                        <a class="btn btn-primary btn-sm" href="keluarga/detail.php?id_keluarga=<?php echo $data['id_keluarga']; ?>" title="Detail"><i class="fas fa-fw fa-eye"></i></a>

                        <a class="btn btn-warning btn-sm" href="keluarga/ubah_keluarga.php?id_keluarga=<?php echo $data['id_keluarga']; ?>" title="Ubah"><i class="fas fa-edit"></i></a>

                        <a class="btn btn-danger btn-sm" href="keluarga/aksi_hapus_kel.php?id_keluarga=<?php echo $data['id_keluarga']; ?>&nip_nup=<?php echo $_GET['nip_nup']; ?>" title="Hapus" onclick="return confirm('Yakin Ingin Mengapus Data ini ?')"><i class="fas fa-trash"></i></a>
                    </td>
                    <td><?php echo $data['nik']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['jk']; ?></td>
                    <td><?php echo $data['tempat_lahir']. ', ' . date('d-m-Y',strtotime($data['tanggal_lahir'])); ?></td>
                    <td><?php echo $data['status']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>



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