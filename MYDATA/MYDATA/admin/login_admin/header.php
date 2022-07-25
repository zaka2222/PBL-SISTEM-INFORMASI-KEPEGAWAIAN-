<?php
include "../koneksi.php";
// mengaktifkan session
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
$id_admin = $_SESSION['id_admin'];
$admin=$koneksi->query("SELECT * FROM data_admin WHERE id_admin='$id_admin'");
$datalogin=mysqli_fetch_assoc($admin);

?>     
 <!-- Topbar -->


                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">
                    <!-- Sidebar - Brand -->
 
   
                <img src="../img/pol.png" width="4%">
          
                <div class="sidebar-brand-text mx-3" style="font-weight: normal; color: lightgreen;"><b>MYDATA <br>POLITAP </b></div>

                <div class="topbar-divider d-none d-sm-block"></div>



                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <a class="nav-link" href="das.php">
                        <b><span class="mr-2 d-none d-lg-inline text-gray-600"><font color="white">Dashboard</font></span></b>
                    </a>

                    <a class="nav-link" href="panduan.php">
                        <b><span class="mr-2 d-none d-lg-inline text-gray-600"><font color="white">Panduan</font></span></b>
                    </a>
                    <a class="nav-link" href="data_pegawai.php">
                        <b><span class="mr-2 d-none d-lg-inline text-gray-600"><font color="white">Data Pegawai</font></span></b>
                    </a>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                            <?php
                                $sandi=$koneksi->query("SELECT * FROM data_pegawai WHERE notif_foto='Sudah Ganti Foto'");
                                        
                            $db = mysqli_num_rows($sandi);
                            $datasandi=mysqli_fetch_assoc($sandi);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifprofil=$koneksi->query("SELECT * FROM data_pegawai WHERE notif_profil='Sudah Mengisi Profil'");
                                        
                            $db2 = mysqli_num_rows($notifprofil);
                            $datanp=mysqli_fetch_assoc($notifprofil);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifkel=$koneksi->query("SELECT * FROM data_keluarga WHERE notif_kel='Sudah Mengisi Data Keluarga' GROUP BY nip_nup ");
                                        
                            $db3 = mysqli_num_rows($notifkel);
                            $datankel=mysqli_fetch_assoc($notifkel);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifpend=$koneksi->query("SELECT * FROM riwayat_pendidikan WHERE notif_pend='Sudah Mengisi Data Pendidikan' GROUP BY nip_nup ");
                                        
                            $db4 = mysqli_num_rows($notifpend);
                            $datanpend=mysqli_fetch_assoc($notifpend);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk=$koneksi->query("SELECT * FROM data_sk WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Penyesuaian Ijazah' GROUP BY nip_nup ");
                                        
                            $db5 = mysqli_num_rows($notifsk);
                            $datansk=mysqli_fetch_assoc($notifsk);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk2=$koneksi->query("SELECT * FROM data_sk WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Capeg' GROUP BY nip_nup ");
                                        
                            $db6 = mysqli_num_rows($notifsk2);
                            $datansk2=mysqli_fetch_assoc($notifsk2);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk3=$koneksi->query("SELECT * FROM data_sk WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Tetap' GROUP BY nip_nup ");
                                        
                            $db7 = mysqli_num_rows($notifsk3);
                            $datansk3=mysqli_fetch_assoc($notifsk3);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk4=$koneksi->query("SELECT * FROM data_sk WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Penyesuaian Masa' GROUP BY nip_nup ");
                                        
                            $db8 = mysqli_num_rows($notifsk4);
                            $datansk4=mysqli_fetch_assoc($notifsk4);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk5=$koneksi->query("SELECT * FROM data_sk WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Inpassing' GROUP BY nip_nup ");
                                        
                            $db9 = mysqli_num_rows($notifsk5);
                            $datansk5=mysqli_fetch_assoc($notifsk5);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk6=$koneksi->query("SELECT * FROM data_sk WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Kenaikan Pangkat' GROUP BY nip_nup ");
                                        
                            $db10 = mysqli_num_rows($notifsk6);
                            $datansk6=mysqli_fetch_assoc($notifsk6);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk7=$koneksi->query("SELECT * FROM data_sk WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Mutasi' GROUP BY nip_nup ");
                                        
                            $db11 = mysqli_num_rows($notifsk7);
                            $datansk7=mysqli_fetch_assoc($notifsk7);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk8=$koneksi->query("SELECT * FROM no_reg_serdos WHERE notif_nrs='Sudah Mengisi Data No. Registrasi Serdos' GROUP BY nip_nup ");
                                        
                            $db12 = mysqli_num_rows($notifsk8);
                            $datansk8=mysqli_fetch_assoc($notifsk8);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk9=$koneksi->query("SELECT * FROM golongan WHERE notif_gol='Sudah Mengisi Data Golongan' GROUP BY nip_nup ");
                                        
                            $db13 = mysqli_num_rows($notifsk9);
                            $datansk9=mysqli_fetch_assoc($notifsk9);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk10=$koneksi->query("SELECT * FROM riwayat_jabatan_aka_fung WHERE notif_jaf='Sudah Mengisi Data Riwayat Jabatan Akademi' GROUP BY nip_nup ");
                                        
                            $db14 = mysqli_num_rows($notifsk10);
                            $datansk10=mysqli_fetch_assoc($notifsk10);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk11=$koneksi->query("SELECT * FROM riwayat_jabatan_struktural WHERE notif_js='Sudah Mengisi Data Riwayat Jabatan Struktural' GROUP BY nip_nup ");
                                        
                            $db15 = mysqli_num_rows($notifsk11);
                            $datansk11=mysqli_fetch_assoc($notifsk11);
                             error_reporting(0);
                            ?>

                            <?php
                                $notifsk12=$koneksi->query("SELECT * FROM riwayat_diklat WHERE notif_diklat='Sudah Mengisi Data Riwayat Diklat' GROUP BY nip_nup ");
                                        
                            $db16 = mysqli_num_rows($notifsk12);
                            $datansk12=mysqli_fetch_assoc($notifsk12);
                             error_reporting(0);
                            ?>

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <i class="fa fa-bell" style="color: red"></i>&nbsp;
                                <?php  
                                if ($datasandi['notif_foto'] != 'Sudah Ganti Foto'){
                                            
                                }else{
                                ?>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><font color="white"><?= $db+$db2+$db3+$db4+$db5+$db6+$db7+$db8+$db9+$db10+$db11+$db12+$db13+$db14+$db15+$db16 ?></font></span>
                                <?php } ?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown"><p>
                                <div><center>
                                    <label style="color: blue"><b>Notifikasi Data Pegawai</b></label></center>
                                </div>
                                <hr>

                    <?php 

                        if ($db == 0) {?>
                            
                                <center><label style="color: red">"Tidak Ada Data"</label></center>

                        <?php }else{?>


<div style="overflow: auto; width: 700px; height: 200px;background-color: rgb(255, 255, 255);">

                                <?php
                                    $gs=$koneksi->query("SELECT * FROM data_pegawai WHERE notif_foto='Sudah Ganti Foto'");
                                    while($datadb=mysqli_fetch_assoc($gs)){
                                ?>

                                    
                                        <form method="post" action="simpan_notif_foto.php?nip_nup=<?php echo $datadb['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datadb['nip_nup'];?>">
                                            <input type="hidden" name="notif_foto" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">

                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datadb['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datadb['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datadb['notif_foto']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_foto" class="form-control"  value= "T">
                                        </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $gs2=$koneksi->query("SELECT * FROM data_pegawai WHERE notif_profil='Sudah Mengisi Profil'");
                                    while($datadb2=mysqli_fetch_assoc($gs2)){
                                ?>

                                    
                                        <form method="post" action="simpan_notif_profil.php?nip_nup=<?php echo $datadb2['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datadb2['nip_nup'];?>">
                                            <input type="hidden" name="notif_profil" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">

                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datadb2['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datadb2['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datadb2['notif_profil']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_profil" class="form-control"  value= "T">
                                       </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $nkel=$koneksi->query("SELECT * FROM data_keluarga JOIN data_pegawai USING(nip_nup) WHERE notif_kel='Sudah Mengisi Data Keluarga' GROUP BY nip_nup");
                                    while($datakel=mysqli_fetch_assoc($nkel)){
                                ?>

                                    
                                        <form method="post" action="simpan_notif_kel.php?nip_nup=<?php echo $datakel['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datakel['nip_nup'];?>">
                                            <input type="hidden" name="notif_kel" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">

                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datakel['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datakel['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datakel['notif_kel']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_kel" class="form-control"  value= "T">
                                        </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $npend=$koneksi->query("SELECT * FROM riwayat_pendidikan JOIN data_pegawai USING(nip_nup) WHERE notif_pend='Sudah Mengisi Data Pendidikan' GROUP BY nip_nup");
                                    while($datapend=mysqli_fetch_assoc($npend)){
                                ?>

                                    
                                        <form method="post" action="simpan_notif_pend.php?nip_nup=<?php echo $datapend['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datapend['nip_nup'];?>">
                                            <input type="hidden" name="notif_pend" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">

                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datapend['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datapend['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datapend['notif_pend']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_pend" class="form-control"  value= "T">
                                        </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $nsk1=$koneksi->query("SELECT * FROM data_sk JOIN data_pegawai USING(nip_nup) WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Penyesuaian Ijazah' GROUP BY nip_nup");
                                    while($datask1=mysqli_fetch_assoc($nsk1)){
                                ?>

                                    
                                        <form method="post" action="simpan_notif_sk.php?nip_nup=<?php echo $datask1['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask1['nip_nup'];?>">
                                            <input type="hidden" name="jenis_sk" value= "<?php echo $datask1['jenis_sk'];?>">
                                            <input type="hidden" name="notif_sk" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">

                                                <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask1['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask1['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask1['notif_sk']; ?> <?php echo $datask1['jenis_sk']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_sk" class="form-control"  value= "T">
                                            </button>
                                         
                                        </form>          
                                    

                                    <?php } ?>

                                <?php
                                    $nsk2=$koneksi->query("SELECT * FROM data_sk JOIN data_pegawai USING(nip_nup) WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Capeg' GROUP BY nip_nup");
                                    while($datask2=mysqli_fetch_assoc($nsk2)){
                                ?>

                                        <form method="post" action="simpan_notif_sk2.php?nip_nup=<?php echo $datask2['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask2['nip_nup'];?>">
                                            <input type="hidden" name="jenis_sk" value= "<?php echo $datask2['jenis_sk'];?>">
                                            <input type="hidden" name="notif_sk" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">
                                        
                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask2['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask2['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask2['notif_sk']; ?> <?php echo $datask2['jenis_sk']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_sk" class="form-control"  value= "T">  
                                            </button>
                                         
                                        </form>           
                                    

                                    <?php } ?>

                                <?php
                                    $nsk3=$koneksi->query("SELECT * FROM data_sk JOIN data_pegawai USING(nip_nup) WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Tetap' GROUP BY nip_nup");
                                    while($datask3=mysqli_fetch_assoc($nsk3)){
                                ?>

                                        <form method="post" action="simpan_notif_sk3.php?nip_nup=<?php echo $datask3['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask3['nip_nup'];?>">
                                            <input type="hidden" name="jenis_sk" value= "<?php echo $datask3['jenis_sk'];?>">
                                            <input type="hidden" name="notif_sk" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">
                                        
                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask3['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask3['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask3['notif_sk']; ?> <?php echo $datask3['jenis_sk']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_sk" class="form-control"  value= "T">
                                        </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $nsk4=$koneksi->query("SELECT * FROM data_sk JOIN data_pegawai USING(nip_nup) WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Penyesuaian Masa' GROUP BY nip_nup");
                                    while($datask4=mysqli_fetch_assoc($nsk4)){
                                ?>

                                        <form method="post" action="simpan_notif_sk4.php?nip_nup=<?php echo $datask4['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask4['nip_nup'];?>">
                                            <input type="hidden" name="jenis_sk" value= "<?php echo $datask4['jenis_sk'];?>">
                                            <input type="hidden" name="notif_sk" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">
                                        
                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask4['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask4['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask4['notif_sk']; ?> <?php echo $datask4['jenis_sk']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_sk" class="form-control"  value= "T">
                                        </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $nsk5=$koneksi->query("SELECT * FROM data_sk JOIN data_pegawai USING(nip_nup) WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Inpassing' GROUP BY nip_nup");
                                    while($datask5=mysqli_fetch_assoc($nsk5)){
                                ?>

                                        <form method="post" action="simpan_notif_sk5.php?nip_nup=<?php echo $datask5['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask5['nip_nup'];?>">
                                            <input type="hidden" name="jenis_sk" value= "<?php echo $datask5['jenis_sk'];?>">
                                            <input type="hidden" name="notif_sk" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">
                                        
                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask5['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask5['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask5['notif_sk']; ?> <?php echo $datask5['jenis_sk']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_sk" class="form-control"  value= "T">
                                        </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $nsk6=$koneksi->query("SELECT * FROM data_sk JOIN data_pegawai USING(nip_nup) WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Kenaikan Pangkat' GROUP BY nip_nup");
                                    while($datask6=mysqli_fetch_assoc($nsk6)){
                                ?>

                                        <form method="post" action="simpan_notif_sk6.php?nip_nup=<?php echo $datask6['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask6['nip_nup'];?>">
                                            <input type="hidden" name="jenis_sk" value= "<?php echo $datask6['jenis_sk'];?>">
                                            <input type="hidden" name="notif_sk" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">
                                        
                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask6['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask6['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask6['notif_sk']; ?> <?php echo $datask6['jenis_sk']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_sk" class="form-control"  value= "T">
                                        </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $nsk7=$koneksi->query("SELECT * FROM data_sk JOIN data_pegawai USING(nip_nup) WHERE notif_sk='Sudah Mengisi Data' AND jenis_sk='SK Mutasi' GROUP BY nip_nup");
                                    while($datask7=mysqli_fetch_assoc($nsk7)){
                                ?>

                                        <form method="post" action="simpan_notif_sk7.php?nip_nup=<?php echo $datask7['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask7['nip_nup'];?>">
                                            <input type="hidden" name="jenis_sk" value= "<?php echo $datask7['jenis_sk'];?>">
                                            <input type="hidden" name="notif_sk" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">
                                        
                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask7['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask7['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask7['notif_sk']; ?> <?php echo $datask7['jenis_sk']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_sk" class="form-control"  value= "T">
                                        </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $nsk8=$koneksi->query("SELECT * FROM no_reg_serdos JOIN data_pegawai USING(nip_nup) WHERE notif_nrs='Sudah Mengisi Data No. Registrasi Serdos' GROUP BY nip_nup");
                                    while($datask8=mysqli_fetch_assoc($nsk8)){
                                ?>

                                        <form method="post" action="simpan_notif_nrs.php?nip_nup=<?php echo $datask8['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask8['nip_nup'];?>">
                                            <input type="hidden" name="notif_nrs" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">
                                        

                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask8['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask8['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask8['notif_nrs']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_nrs" class="form-control"  value= "T">
                                        </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $nsk9=$koneksi->query("SELECT * FROM golongan JOIN data_pegawai USING(nip_nup) WHERE notif_gol='Sudah Mengisi Data Golongan' GROUP BY nip_nup");
                                    while($datask9=mysqli_fetch_assoc($nsk9)){
                                ?>

                                        <form method="post" action="simpan_notif_gol.php?nip_nup=<?php echo $datask9['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask9['nip_nup'];?>">
                                            <input type="hidden" name="notif_gol" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">
                
                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask9['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask9['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask9['notif_gol']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_gol" class="form-control"  value= "T">
                                         </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $nsk10=$koneksi->query("SELECT * FROM riwayat_jabatan_aka_fung JOIN data_pegawai USING(nip_nup) WHERE notif_jaf='Sudah Mengisi Data Riwayat Jabatan Akademi' GROUP BY nip_nup");
                                    while($datask10=mysqli_fetch_assoc($nsk10)){
                                ?>

                                        <form method="post" action="simpan_notif_jaf.php?nip_nup=<?php echo $datask10['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask10['nip_nup'];?>">
                                            <input type="hidden" name="notif_jaf" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">
                
                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask10['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask10['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask10['notif_jaf']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_jaf" class="form-control"  value= "T">
                                         </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $nsk11=$koneksi->query("SELECT * FROM riwayat_jabatan_struktural JOIN data_pegawai USING(nip_nup) WHERE notif_js='Sudah Mengisi Data Riwayat Jabatan StrukturaL' GROUP BY nip_nup");
                                    while($datask11=mysqli_fetch_assoc($nsk11)){
                                ?>

                                        <form method="post" action="simpan_notif_js.php?nip_nup=<?php echo $datask11['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask11['nip_nup'];?>">
                                            <input type="hidden" name="notif_js" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">
                
                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask11['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask11['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask11['notif_js']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_js" class="form-control"  value= "T">
                                        </button>
                                         
                                        </form> 

                                    <?php } ?>

                                <?php
                                    $nsk12=$koneksi->query("SELECT * FROM riwayat_diklat JOIN data_pegawai USING(nip_nup) WHERE notif_diklat='Sudah Mengisi Data Riwayat Diklat' GROUP BY nip_nup");
                                    while($datask12=mysqli_fetch_assoc($nsk12)){
                                ?>

                                        <form method="post" action="simpan_notif_diklat.php?nip_nup=<?php echo $datask12['nip_nup']; ?>">

                                            <input type="hidden" name="nip_nup" value= "<?php echo $datask12['nip_nup'];?>">
                                            <input type="hidden" name="notif_diklat" value= "T">

                                        
                                            <button type="submit" class="btn btn-white" style="color: black; font-size:14px;">
                
                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datask12['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datask12['nip_nup']; ?>,
                                                <label style="color: blue"> " <?php echo $datask12['notif_diklat']; ?> "</label> )</span>

                                                <input type="hidden" name="notif_diklat" class="form-control"  value= "T">
                                        </button>
                                         
                                        </form> 

                                    <?php } ?>

                                    </div>
                                    <hr>
                        <?php } ?>      
                            </div>
                        </li>

                    <form class="form-horizontal" action="simpan.php" method="post">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                            <?php
                                $sandi=$koneksi->query("SELECT * FROM data_pegawai WHERE ganti_sandi='Y'");
                                        
                            $db = mysqli_num_rows($sandi);
                            $datasandi=mysqli_fetch_assoc($sandi);
                             error_reporting(0);
                            ?>
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <i class="fa fa-bell" style="color: red"></i>&nbsp;
                                <?php  
                                if ($datasandi['ganti_sandi'] != 'Y'){
                                            
                                }else{
                                ?>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><font color="white"><?=$db?></font></span>
                                <?php } ?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown"><p>
                                <div><center>
                                    <label style="color: blue"><b>Pegawai Sudah Ganti Password</b></label></center>
                                </div>
                                <hr>

                    <?php 

                        if ($db == 0) {?>
                            
                                <center><label style="color: red">"Tidak Ada Data"</label></center>

                        <?php }else{?>

<div style="overflow: auto; width: 10%px; height: 100px;background-color: rgb(255, 255, 255);">
                                <?php
                                    $gs=$koneksi->query("SELECT * FROM data_pegawai WHERE ganti_sandi='Y'");
                                    while($datadb=mysqli_fetch_assoc($gs)){
                                ?>

                                    <a href="data_pegawai.php" class="clearfix">
                                         <a class="dropdown-item">
                                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                <span class="title"><b><?php echo $datadb['nama_pegawai']; ?></b></span>
                                                <span class="message">( <?php echo $datadb['nip_nup']; ?> )</span>

                                            <input type="hidden" name="ganti_sandi" class="form-control"  value= "T">

                                        </a>            
                                    </a>

                                    <?php } ?>
                                </div>
                                    <hr>
                                    <center><input name="" class="btn btn-success" type="submit" value="View All"></center>
                        <?php } ?>      
                            </div>
                        </li>
                    </form>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><font color="white"><b><?php echo $datalogin['nama']; ?></b></font></span>

                                    <img src="../img/pol.png" class="img-profile rounded-circle">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#password">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ganti Password
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->



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
                <div class="modal-body">Yakin Ingin Keluar ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>

                   <form action="logout.php" method="post">
                      <button type="submit" class="btn btn-primary">Ya</button>
                   </form>
                </div>
            </div>
        </div>
    </div>

<!-- Logout Modal-->
    <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form method="post" action="aksi_ubah_password.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id_admin" class="form-control" placeholder="id_admin  *" value= "<?php echo $datalogin['id_admin'];?>" title="Username " readonly>

                            <input type="text" name="password" class="form-control" placeholder="Password  *" value= "<?php echo $datalogin['password'];?>" title="Password " required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>

                   
                    <button type="submit" name="ubah_password" class="btn btn-primary">Simpan</button>
            </form>
                </div>
            </div>
        </div>
    </div>

