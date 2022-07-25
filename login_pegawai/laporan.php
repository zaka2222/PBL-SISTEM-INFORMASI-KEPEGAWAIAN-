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
<?php
include "../koneksi.php";
// mengaktifkan session
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
$nipnup = $_SESSION['nip_nup'];
$pegawai=$koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$nipnup'");
$datalogin=mysqli_fetch_assoc($pegawai);

?>  
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-12">

                        <p><br><button class="btn btn-primary" onclick="window.print()"><i class='fa fa-print' aria-hidden='true'></i> </button>
                    </div>    

                   <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                	 <center><h2><b>Data Pegawai</b></h2></center><p><hr style="border-color: black;"><p><br>
                                	<div class="form-group row">

                               
						<div class="col-md-3">
                                <div class="card-body">
                                    <div class="text-center">

                                        <img src="img/foto_pegawai/<?php echo $datalogin['foto_pegawai']; ?>" class="img-fluid shadow" alt="Foto Pegawai">

                                    </div>  

                                </div>
                        </div>

                        <div class="col-md-9">
                                <div class="card-body">
                                        <div class="tab-content">
                                            <div id="profil" class="tab-pane fade show active">
                                                
							                	<label><b>Data Diri</b></label>

											<table class="table table-bordered">
											    <tr>
											        <td width="30%"><b>NIP/NUP</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['nip_nup']; ?></td>
											    </tr>
											    <tr>
											        <td><b>Nama Lengkap</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['nama_pegawai']; ?></td>
											    </tr>
											    <tr>
											        <td><b>Tempat, Tanggal Lahir</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['tempat_lahir'] . ', ' . date('d-m-Y',strtotime($datalogin['tanggal_lahir'])); ?></td>
											    </tr>
											    <tr>
											        <td><b>Jenis Kelamin</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['jenis_kelamin']; ?></td>
											    </tr>
											    <tr>
											        <td><b>Agama</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['agama']; ?></td>
											    </tr>
											    <tr>
											        <td><b>No.KTP</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['no_ktp']; ?></td>
											    </tr>
											    <tr>
											        <td><b>No.Kartu Keluarga</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['no_kk']; ?></td>
											    </tr>
											    <tr>
											        <td><b>NPWP</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['npwp']; ?></td>
											    </tr>
											    <tr>
											        <td><b>Status Pernikahan</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['status_pernikahan']; ?></td>
											    </tr>
											    <tr>
											        <td><b>No.Surat nikah, Tanggal</b></td>
											        <?php 
											        $tanggal_nikah=date('d-m-Y', strtotime($datalogin["tanggal_nikah"]));
											        ?>
											        <td>&nbsp;<?php echo $datalogin['no_surat_nikah']; ?> 
											                        <?php 
											                            if ($datalogin['tanggal_nikah']=='0000-00-00') {
											                            echo "-";
											                            }else{
											                            echo ", $tanggal_nikah
											                            ";
											                        } ?> 
											        </td>

											    </tr>
											    <tr>
											        <td><b>No.Surat Cerai, Tanggal</b></td>
											        <?php 
											        $tanggal_cerai=date('d-m-Y', strtotime($datalogin["tanggal_cerai"]));
											        ?>
											        <td>&nbsp;<?php echo $datalogin['no_surat_cerai']; ?> 
											                        <?php 
											                            if ($datalogin['tanggal_cerai']=='0000-00-00') {
											                            echo "-";
											                            }else{
											                            echo ", $tanggal_cerai
											                            ";
											                        } ?> 
											        </td>

											    </tr>
											    <tr>
											        <td><b>Alamat</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['alamat_rmh']; ?></td>
											    </tr>
											    <tr>
											        <td><b>No.HP</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['no_hp']; ?></td>
											    </tr>
											    <tr>
											        <td><b>Email</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['email']; ?></td>
											    </tr>
											    <tr>
											        <td><b>Status Pegawai</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['status_pegawai']; ?></td>
											    </tr>
											    <tr>
											        <td><b>Jumlah Anak</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['jmlh_anak']; ?></td>
											    </tr>
											    <tr>
											        <td><b>BPJS Kesehatan</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['no_bpjs_kesehatan']; ?></td>
											    </tr>
											    <tr>
											        <td><b>BPJS Ketenagakerjaan</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['no_bpjs_ketenagakerjaan']; ?></td>
											    </tr>
											</table>

											<label><b>NIDN</b></label>

											<table class="table table-bordered">
											    <tr>
											        <td width="30%"><b>Nomor SK</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['no_sk_nidn']; ?></td>
											    </tr>

											    <tr>
											        <td><b>TMT</b></td>
											        <?php 
											        $tmt_nidn=date('d-m-Y', strtotime($datalogin["tmt_nidn"]));
											        ?>
											        <td>&nbsp;<?php 
											                            if ($datalogin['tmt_nidn']=='0000-00-00') {
											                            echo "-";
											                            }else{
											                            echo "$tmt_nidn
											                            ";
											                        } ?> 
											        </td>

											    </tr>

											    <tr>
											        <td><b>Tanggal SK</b></td>
											        <?php 
											        $tgl_sk_nidn=date('d-m-Y', strtotime($datalogin["tgl_sk_nidn"]));
											        ?>
											        <td>&nbsp;<?php 
											                            if ($datalogin['tgl_sk_nidn']=='0000-00-00') {
											                            echo "-";
											                            }else{
											                            echo "$tgl_sk_nidn
											                            ";
											                        } ?> 
											        </td>

											    </tr>

											</table>

											<label><b>NITK</b></label>

											<table class="table table-bordered">
											    <tr>
											        <td width="30%"><b>Nomor SK</b></td>
											        
											        <td>&nbsp;<?php echo $datalogin['no_sk_ntik']; ?></td>
											    </tr>

											    <tr>
											        <td><b>TMT</b></td>
											        <?php 
											        $tmt_ntik=date('d-m-Y', strtotime($datalogin["tmt_ntik"]));
											        ?>
											        <td>&nbsp;<?php 
											                            if ($datalogin['tmt_ntik']=='0000-00-00') {
											                            echo "-";
											                            }else{
											                            echo "$tmt_ntik
											                            ";
											                        } ?> 
											        </td>

											    </tr>

											    <tr>
											        <td><b>Tanggal SK</b></td>
											        <?php 
											        $tgl_sk_ntik=date('d-m-Y', strtotime($datalogin["tgl_sk_ntik"]));
											        ?>
											        <td>&nbsp;<?php 
											                            if ($datalogin['tgl_sk_ntik']=='0000-00-00') {
											                            echo "-";
											                            }else{
											                            echo "$tgl_sk_ntik
											                            ";
											                        } ?> 
											        </td>

											    </tr>

											</table>


                                            </div>
                                        </div>
                                    </div>
                            </div>

                             <div class="col-md-12">
							    <div class="card-body">
							        <div class="tab-content">
							            <div id="keluarga" class="tab-pane fade  show active">
							                <div class="card-body">

							                <div class="table-responsive">
							                	<label><b>Data Keluarga</b></label>
							                   <table class="table table-bordered">
							                    <thead>
							                        <tr><th>No</th>
							                            <th>NIK</th>
							                            <th>Nama</th>
							                            <th>Jenis Kelamin</th>
							                            <th>Tempat, Tanggal Lahir</th>
							                            <th>Pekerjaan</th>
							                            <th>Status</th>
							                            <th>Alamat Rumah</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_keluarga = mysqli_query($koneksi,"select * from data_keluarga where nip_nup='$nipnup'");
							                            while($data = mysqli_fetch_array($data_keluarga)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['nik']; ?></td>
							                                <td><?php echo $data['nama']; ?></td>
							                                <td><?php echo $data['jk']; ?></td>
							                                <td><?php echo $data['tempat_lahir']. ', ' . date('d-m-Y',strtotime($data['tanggal_lahir'])); ?></td>
							                                <td><?php echo $data['pekerjaan']; ?></td>
							                                <td><?php echo $data['status']; ?></td>
							                                <td><?php echo $data['alamat_rmh']; ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>

							                <div class="table-responsive">
							                	<label><b>Data Pendidikan</b></label>
							                   <table class="table table-bordered">
							                    <thead>
							                        <tr><th>No</th>
							                            <th>No.Ijazah</th>
							                            <th>Tanggal Lulus</th>
							                            <th>Universitas</th>
							                            <th>Tingkat Pendidikan</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $riwayat_pendidikan = mysqli_query($koneksi,"select * from riwayat_pendidikan where nip_nup='$nipnup'");
							                            while($data = mysqli_fetch_array($riwayat_pendidikan)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['no_ijazah']; ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tgl_lulus"]));   ?></td>
							                                <td><?php echo $data['nama_universitas']; ?></td>
							                                <td><?php echo $data['tingkat_pendidikan']; ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>

							                <div class="table-responsive">
							                	<label><b>Data SK Penyesuaian Ijazah</b></label>
							                   <table class="table table-bordered">
							                     <thead>
							                        <tr><th>No</th>
							                            <th>Nomor</th>
							                            <th>TMT</th>
							                            <th>Tanggal SK</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_sk = mysqli_query($koneksi,"select * from data_sk where nip_nup='$nipnup' and jenis_sk='SK Penyesuaian Ijazah'");
							                            while($data = mysqli_fetch_array($data_sk)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['nomor']; ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tmt"]));   ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tgl_sk"]));   ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>

							                 <div class="table-responsive">
							                	<label><b>Data SK Capeg</b></label>
							                   <table class="table table-bordered">
							                     <thead>
							                        <tr><th>No</th>
							                            <th>Nomor</th>
							                            <th>TMT</th>
							                            <th>Tanggal SK</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_sk = mysqli_query($koneksi,"select * from data_sk where nip_nup='$nipnup' and jenis_sk='SK Capeg'");
							                            while($data = mysqli_fetch_array($data_sk)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['nomor']; ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tmt"]));   ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tgl_sk"]));   ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>

							                 <div class="table-responsive">
							                	<label><b>Data SK Tetap</b></label>
							                   <table class="table table-bordered">
							                     <thead>
							                        <tr><th>No</th>
							                            <th>Nomor</th>
							                            <th>TMT</th>
							                            <th>Tanggal SK</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_sk = mysqli_query($koneksi,"select * from data_sk where nip_nup='$nipnup' and jenis_sk='SK Tetap'");
							                            while($data = mysqli_fetch_array($data_sk)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['nomor']; ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tmt"]));   ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tgl_sk"]));   ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>

							                 <div class="table-responsive">
							                	<label><b>Data SK Penyesuaian Masa</b></label>
							                   <table class="table table-bordered">
							                     <thead>
							                        <tr><th>No</th>
							                            <th>Nomor</th>
							                            <th>TMT</th>
							                            <th>Tanggal SK</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_sk = mysqli_query($koneksi,"select * from data_sk where nip_nup='$nipnup' and jenis_sk='SK Penyesuaian Masa'");
							                            while($data = mysqli_fetch_array($data_sk)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['nomor']; ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tmt"]));   ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tgl_sk"]));   ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>

							                 <div class="table-responsive">
							                	<label><b>Data SK Inpassing</b></label>
							                   <table class="table table-bordered">
							                     <thead>
							                        <tr><th>No</th>
							                            <th>Nomor</th>
							                            <th>TMT</th>
							                            <th>Tanggal SK</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_sk = mysqli_query($koneksi,"select * from data_sk where nip_nup='$nipnup' and jenis_sk='SK Inpassing'");
							                            while($data = mysqli_fetch_array($data_sk)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['nomor']; ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tmt"]));   ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tgl_sk"]));   ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>

							                 <div class="table-responsive">
							                	<label><b>Data SK Kenaikan Pangkat</b></label>
							                   <table class="table table-bordered">
							                     <thead>
							                        <tr><th>No</th>
							                            <th>Nomor</th>
							                            <th>TMT</th>
							                            <th>Tanggal SK</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_sk = mysqli_query($koneksi,"select * from data_sk where nip_nup='$nipnup' and jenis_sk='SK Kenaikan Pangkat'");
							                            while($data = mysqli_fetch_array($data_sk)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['nomor']; ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tmt"]));   ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tgl_sk"]));   ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>

							                 <div class="table-responsive">
							                	<label><b>Data SK Mutasi</b></label>
							                   <table class="table table-bordered">
							                     <thead>
							                        <tr><th>No</th>
							                            <th>Nomor</th>
							                            <th>TMT</th>
							                            <th>Tanggal SK</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_sk = mysqli_query($koneksi,"select * from data_sk where nip_nup='$nipnup' and jenis_sk='SK Mutasi'");
							                            while($data = mysqli_fetch_array($data_sk)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['nomor']; ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tmt"]));   ?></td>
							                                <td><?php echo date('d-m-Y', strtotime($data["tgl_sk"]));   ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>

							                 <div class="table-responsive">
							                	<label><b>Data No.Registrasi Serdos</b></label>
							                   <table class="table table-bordered">
							                    <thead>
							                        <tr><th>No</th>
							                            <th>Nomor</th>
							                            <th>Tanggal</th>
							                            <th>Tempat, Tahun Pendapatan</th>
							                            <th>Bidang Ilmu</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_no_reg_serdos = mysqli_query($koneksi,"select * from no_reg_serdos where nip_nup='$nipnup'");
							                            while($data = mysqli_fetch_array($data_no_reg_serdos)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['nomor']; ?></td>
							                                <td><?php echo $data['tgl']; ?></td>
							                                <td><?php echo $data['tempat']; ?>, <?php echo $data['tahun_pendapatan']; ?></td>
							                                <td><?php echo $data['bidang_ilmu']; ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>	

							                 <div class="table-responsive">
							                	<label><b>Data Golongan/Pangkat</b></label>
							                   <table class="table table-bordered">
							                    <thead>
							                        <tr><th>No</th>
							                            <th>Riwayat Golongan</th>
							                            <th>Pangkat</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_golongan = mysqli_query($koneksi,"select * from golongan where nip_nup='$nipnup'");
							                            while($data = mysqli_fetch_array($data_golongan)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['riwayat_gol']; ?></td>
							                                <td><?php echo $data['pangkat']; ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>		

							                 <div class="table-responsive">
							                	<label><b>Data Riwayat Jabatan Akademik/Fungsional</b></label>
							                   <table class="table table-bordered">
							                    <thead>
							                        <tr><th>No</th>
							                            <th>TMT Jabatan</th>
							                            <th>Nama Jabatan</th>
							                            <th>Tanggal SK</th>
							                            <th>No.SK</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_riwayat_jaf = mysqli_query($koneksi,"select * from riwayat_jabatan_aka_fung where nip_nup='$nipnup'");
							                            while($data = mysqli_fetch_array($data_riwayat_jaf)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['tmt_jabatan']; ?></td>
							                                <td><?php echo $data['nama_jabatan']; ?></td>
							                                <td><?php echo $data['tgl_sk']; ?></td>
							                                <td><?php echo $data['no_sk']; ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>		

							                 <div class="table-responsive">
							                	<label><b>Data Riwayat Jabatan Struktural/Tugas Tambahan</b></label>
							                   <table class="table table-bordered">
							                    <thead>
							                        <tr><th>No</th>
							                            <th>Tanggal Mulai</th>
							                            <th>Tanggal Selesai</th>
							                            <th>Nama Jabatan</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_riwayat_st = mysqli_query($koneksi,"select * from riwayat_jabatan_struktural where nip_nup='$nipnup'");
							                            while($data = mysqli_fetch_array($data_riwayat_st)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['tgl_mulai']; ?></td>
							                                <td><?php echo $data['tgl_selesai']; ?></td>
							                                <td><?php echo $data['nama_jabatan']; ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>			
		

							                 <div class="table-responsive">
							                	<label><b>Data Riwayat Diklat</b></label>
							                   <table class="table table-bordered">
							                    <thead>
							                        <tr><th>No</th>
							                            <th>No.Sertifikat</th>
							                            <th>Tanggal Diklat</th>
							                            <th>Nama Penyelenggara</th>
							                            <th>Jenis Diklat</th>
							                        </tr>
							                    </thead>
							                    <tbody>
							                       <?php
							                            $no = 0;
							                            $nipnup = $datalogin['nip_nup'];
							                            $data_riwayat_diklat = mysqli_query($koneksi,"select * from riwayat_diklat where nip_nup='$nipnup'");
							                            while($data = mysqli_fetch_array($data_riwayat_diklat)){
							                            $no++;    
							                        ?> 
							                            <tr>
							                                <td><?php echo $no;?></td>
							                                <td><?php echo $data['no_sertifikat']; ?></td>
							                                <td><?php echo $data['tgl_diklat']; ?></td>
							                                <td><?php echo $data['nama_penyelenggara']; ?></td>
							                                <td><?php echo $data['jenis_diklat']; ?></td>
							                            </tr>
							                        <?php } ?>
							                    </tbody>
							                  </table>
							                </div>
							              </div>
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