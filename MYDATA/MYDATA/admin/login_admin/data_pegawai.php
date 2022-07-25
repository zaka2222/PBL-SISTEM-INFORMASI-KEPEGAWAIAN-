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
                            <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
                        </ol>
                    </div>

                   

                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="card shadow mb-4 border-bottom-primary">
                                <div class="card-body">

                                        <div class="tab-content">
                                            <div id="profil" class="tab-pane fade">
                                            
                                            </div>
                                            <div id="keluarga" class="tab-pane fade  show active">
                                                

  <div class="card-body">
    <div class="table-responsive">
        <a href="pegawai/tambah_pegawai.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Data</a>
        <p>
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr><th>No</th>
                <th>Opsi</th>
                <th>NIP/NUP</th>
                <th>Nama Pegawai</th>
                <th>Jenis Kelamin</th>
                <th>Status Pegawai</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
           <?php
                $no = 0;
                $data_pegawai = mysqli_query($koneksi,"select * from data_pegawai");
                while($data = mysqli_fetch_array($data_pegawai)){
                $no++;    
            ?> 
                <tr>
                    <td><?php echo $no;?></td>
            
                    <td class="actions" style="text-align:center;">

                        <a class="btn btn-primary btn-sm" href="index.php?nip_nup=<?php echo $data['nip_nup']; ?>" title="Detail"><i class="fas fa-fw fa-eye"></i></a>

                        <a class="btn btn-warning btn-sm" href="pegawai/ubah_pegawai.php?nip_nup=<?php echo $data['nip_nup']; ?>" title="Ubah"><i class="fas fa-edit"></i></a>

                        <a class="btn btn-danger btn-sm" href="pegawai/aksi_hapus_p.php?nip_nup=<?php echo $data['nip_nup']; ?>" title="Hapus" onclick="return confirm('Yakin Ingin Mengapus Data ini ?')"><i class="fas fa-trash"></i></a>
                    </td>
                    <td><?php echo $data['nip_nup']; ?></td>
                    <td><?php echo $data['nama_pegawai']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['status_pegawai']; ?></td>
                    <td><?php echo $data['password']; ?></td>
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