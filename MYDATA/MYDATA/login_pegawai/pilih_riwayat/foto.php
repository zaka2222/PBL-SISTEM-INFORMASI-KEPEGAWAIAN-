
<div class="col-md-3">
                            <div class="card shadow mb-4 border-left-primary">
                                <div class="card-body">
                                    <div class="text-center">

                                        <img src="../img/foto_pegawai/<?php echo $datalogin['foto_pegawai']; ?>" class="img-fluid shadow" alt="Foto Pegawai">

                                        <h2 class="mt-3"><?php echo $datalogin['nama_pegawai']; ?></h2>
                                        <span class="text-muted" title="NIP/NUP"><?php echo $datalogin['nip_nup']; ?></span>
                                    </div>
                                    <hr>
                                    <span class="text-info"><i class="fas fa-phone" title="No. Handphone"></i></span>
                                    <span class="text-info float-right"><?php echo $datalogin['no_hp']; ?></span>
                                    <hr>
                                    <span class="text-info"><i class="fas fa-envelope" title="Email"></i></span>
                                    <span class="text-info float-right"><?php echo $datalogin['email']; ?></span><hr>

                                    <a class="btn btn-primary btn-block" href="../index_2.php"><i class="fa fa-edit"></i> &nbsp; Ganti Foto</button> 

                                    <a class="btn btn-warning btn-block" href="../ubah_data_pegawai.php?nip_nup=<?php echo $datalogin['nip_nup']; ?>" title="Ubah"><i class="fa fa-edit"></i> Ubah Data Diri</a> 
                                </div>
                            </div>
                        </div>