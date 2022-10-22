<div class="container-fluid py-5">
    <div class="container">

<!-- Pesanan -->

        <div class="row mt-4">
            <div class="col mt-4 col-sm-6 col-lg-10 ">
<!-- Notifikasi -->
        <?php if ($this->session->flashdata('notifikasi')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('notifikasi');?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <?php endif ?>
        <?php if ($this->session->flashdata('flah')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert"> <?php echo $this->session->flashdata('flah');?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <?php endif ?>
<!-- Akhir Notifikasi -->
                <h3>Pesanan Saya</h3>
                
                
                <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-pills" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-bs-toggle="tab" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Belum Verifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-bs-toggle="tab" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Sudah Verifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
                </ul>
            </div>
           

<!-- Akhir Nav-Tabs -->

<!-- Nav-Content -->
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tabs">
                    
            <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Pemesan</th>
                  <th scope="col">Tanggal Pemesanan</th>
                  <th scope="col">Tanggal Ambil</th>
                  <th scope="col">Total</th>
                  <th scope="col">Action</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($pemesanan as $pesan) : ?>
                    <?php $tglPesan = $pesan['tgl_pemesanan']; ?>
                    <?php $tglAmbil = $pesan['tgl_ambil']; ?>
                    <tr>
                  <th> <?php echo $no++ ?></th>
                  <td> <?php echo $pesan['nama']; ?> </td>
            
                  <td> <?php echo date('d-m-Y', strtotime($tglPesan)) ?> </td>
                  <td> <?php echo date('d-m-Y', strtotime($tglAmbil)) ?> </td>
                  <td>Rp. <?php echo number_format($pesan['total_pesanan'])  ?>,- <br>
                  <?php if ($pesan['status_bayar']==0){ ?>
                      <span class="badge bg-warning">Belum Bayar</span>
                  <?php }else{ ?>
                    <span class="badge bg-success">Tunggu Verifikasi</span>
                  <?php }?>
            </td>
                  
                  
                <?php if ($pesan['status_bayar']==0){ ?>
                    <td ><a href="<?php echo base_url(); ?>user/bayar/<?php echo $pesan['id_pesanan'];?>" class="btn btn-primary " role="button"><i class="bi bi-credit-card-2-back-fill"></i></a></td>
                  <?php }else{ ?>
                   
                  <?php }?>
                  
                  <td> <a href="<?php echo base_url(); ?>user/batalbeli/<?php echo $pesan['id_pesanan']; ?>" class="btn btn-danger" role="button" onclick = "return confirm('yakin');"><i class="bi bi-trash"></i></a></td>
                  
                  
                  
            </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            </div>  

            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tabs">
            <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pemesan</th>
                                <th scope="col">Tanggal Pemesanan</th>
                                <th scope="col">Tanggal Ambil</th>
                                <th scope="col">Total</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach($pemesanan_verifikasi as $pesan) : ?>
                                <?php $tglPesan = $pesan['tgl_pemesanan']; ?>
                                <?php $tglAmbil = $pesan['tgl_ambil']; ?>
                                <tr>
                                    <th ><?php echo $no++ ?></th>
                                    <td> <?php echo $pesan['nama']; ?> </td>
                                    <td> <?php echo date('d-m-Y', strtotime($tglPesan)) ?> </td>
                                    <td> <?php echo date('d-m-Y', strtotime($tglAmbil)) ?> </td>
                                    <td>Rp. <?php echo number_format($pesan['total_pesanan'])  ?>,- <br>
                                    <?php if ($pesan['status_verifikasi']==0){ ?>
                                        <span class="badge bg-warning">Belum Bayar</span>
                                        <?php }else{ ?>
                                            <span class="badge bg-success">Terverifikasi</span>
                                            <?php }?>
                                            </td>
                    
                    
                                    <?php if ($pesan['status_verifikasi']==0){ ?>
                                        
                                        <td><button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#cekBukti<?= $pesan['id_pesanan']; ?>">Cek Bukti</button></td>
                                        <?php }else{ ?>
                                            
                                            <?php }?>  
                                </tr>
                        
                        
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>     
        </div>
    </div>
    </div>
    
    <!-- Akhir Nav Tabs Content -->
            </div>
<!-- Akhir Lihat Data Produk -->


</div>

  </div>
  </div>
  </div>
