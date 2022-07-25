<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MYDATA POLITAP - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="img/png" href="img/pol.png" sizes="16x16">

</head>

<body style="background-image: url('img/ba.png');">

    <div class="container"> 

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <div  style="margin-top: 200px !important;">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" style="background-image: url('img/tik.png');"><br><p>
                                <center><img src="img/pol.png" width="70%"></center>

                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 font-weight-bold"><label style="color: blue">LOGIN PEGAWAI</h1></label>
                                        <span class="text-muted">Sistem Informasi Pelayanan Kepegawaian 
                                            <b>Politeknik Negeri Ketapang</b></span><p>
                                    </div>
                                    <form class="user" method="POST" action="cek_login.php">
                                        <div class="form-group row">
                                        <label class="col-sm-1 col-form-label"><i class="fas fa-fw fa-user"></i></label>
                                            <div class="col-sm-11">
                                            <input class="form-control form-control-user" name="nip_nup" placeholder="NIP/NUP" type="nip_nup" required oninvalid="this.setCustomValidity('Data Harap diisi !')" oninput="setCustomValidity('')">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-1 col-form-label"><i class="fas fa-fw fa-key"></i></label>
                                            <div class="col-sm-11">
                                            <input class="form-control form-control-user" name="password" placeholder="Password" type="password" required oninvalid="this.setCustomValidity('Data Harap diisi !')" oninput="setCustomValidity('')">
                                            </div>
                                        </div><br>

                                        <button type="submit" class="btn btn-primary btn-user btn-block"><i class="fas fa-fw fa-sign-in-alt"></i> <B>LOGIN</B></button>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sistem Informasi Pelayanan Kepegawaian</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"><center>Mohon login Dahulu !</center></div>
                <div class="modal-footer">

                   <form>
                      <button type="submit" class="btn btn-primary">Ya</button>
                   </form>
                </div>
            </div>
        </div>
    </div>


            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <?php 
  if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "gagal"){
      echo "<script type='text/javascript'>
            $('#psnGagal').modal('show');
            </script>";
    }else if($pesan == "belum_login"){
      echo "<script type='text/javascript'>
            $('#logoutModal').modal('show');
            </script>";
    }
  }
  ?>

</body>

</html>