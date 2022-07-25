<?php
    $nipnup=$koneksi->query("SELECT * FROM data_pegawai WHERE nip_nup='$_GET[nip_nup]'");
    $data_peg=mysqli_fetch_assoc($nipnup);
?>
<div class="col-md-3">
                            <div class="card shadow mb-4 border-left-primary">
                                <div class="card-body">
                                    <div class="text-center">

                                        <img src="../../../login_pegawai/img/foto_pegawai/<?php echo $data_peg['foto_pegawai']; ?>" class="img-fluid shadow" alt="Foto Pegawai">

                                        <h2 class="mt-3"><?php echo $data_peg['nama_pegawai']; ?></h2>
                                        <span class="text-muted" title="NIP/NUP"><?php echo $data_peg['nip_nup']; ?></span>
                                    </div>
                                    <hr>
                                    <span class="text-info"><i class="fas fa-phone" title="No. Handphone"></i></span>
                                    <span class="text-info float-right"><?php echo $data_peg['no_hp']; ?></span>
                                    <hr>
                                    <span class="text-info"><i class="fas fa-envelope" title="Email"></i></span>
                                    <span class="text-info float-right"><?php echo $data_peg['email']; ?></span><hr>

                                    <a class="btn btn-primary btn-block" href="../dokumen_e/pribadi.php?nip_nup=<?php echo $_GET['nip_nup']; ?>"><i class="fas fa-fw fa-folder"></i> <b>Dokumen Elektronik</b></a>

                                    <a class="btn btn-warning btn-block" href="data_pegawai.php" title="Ubah"><i class="fas fa-sign-out-alt "></i> Kembali</a>  
                                </div>
                            </div>
                        </div>