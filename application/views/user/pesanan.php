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
                
                <div class="card">
                <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">Belum Bayar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nama Pemesan</th>
                  <th scope="col">Tanggal Pemesanan</th>
                  <th scope="col">Tanggal Ambil</th>
                  <th scope="col">Total</th>
                  <th scope="col">Action</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php foreach($pemesanan as $pesan) : ?>
                    <tr>
                  <th scope="row"><?php echo $pesan->id_pesanan ?></th>
                  <td> <?php echo $pesan->nama ?> </td>
                  <td> <?php echo $pesan->tgl_pemesanan ?> </td>
                  <td> <?php echo $pesan->tgl_ambil ?> </td>
                  <td> <?php echo $pesan->total_pesanan ?> <br>
                  <?php if ($pesan->status_bayar==0){ ?>
                      <span class="badge bg-warning">Belum Bayar</span>
                  <?php }else{ ?>
                    <span class="badge bg-success">Tunggu Verifikasi</span>
                  <?php }?>
            </td>
                  
                  
                <?php if ($pesan->status_bayar==0){ ?>
                    <td class=""><a href="<?= base_url('user/bayar/'.$pesan->id_pesanan) ?>" class="btn btn-primary " role="button">BAYAR</a></td>
                  <?php }else{ ?>
                    <td> <a href="" class="btn btn-danger " role="button">Batalkan</a></td>
                  <?php }?>
                  
                  
                  
                  
            </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            </div>  

               
        </div>
    </div>
</div>
<!-- Akhir Lihat Data Produk -->


</div>

  </div>
