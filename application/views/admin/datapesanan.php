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
                <h3>Pesanan</h3>
                
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
                  <th scope="row"><?php echo $pesan['id_pesanan']; ?></th>
                  <td> <?php echo $pesan['nama']; ?> </td>
                  <td> <?php echo $pesan['tgl_pemesanan']; ?> </td>
                  <td> <?php echo $pesan['tgl_ambil']; ?> </td>
                  <td> <?php echo $pesan['total_pesanan']; ?> <br>
                  <?php if ($pesan['status_bayar']==0){ ?>
                      <span class="badge bg-warning">Belum Bayar</span>
                  <?php }else{ ?>
                    <span class="badge bg-success">Tunggu Verifikasi</span>
                  <?php }?>
            </td>
                  
                  
                <?php if ($pesan['status_bayar']==1){ ?>
                    <td ><button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#cekBukti<?= $pesan['id_pesanan']; ?>">Cek Bukti</button></td>
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
<!-- Akhir Lihat Data Produk -->

        

</div>
  </div>

  
  <!-- Modal -->
  <?php foreach($pemesanan as $pesan) : ?>
  <div class="modal fade" id="cekBukti<?php echo $pesan['id_pesanan'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table">

                <tr>
                    <th>Atas Nama </th>
                    <th>:</th>
                    <td><?php echo $pesan['atas_nama'];?></td>
                </tr>
                <tr>
                    <th>Nama Bank </th>
                    <th>:</th>
                    <td><?php echo $pesan['nama_bank'];?></td>
                </tr>
                <tr>
                    <th>No. Rek </th>
                    <th>:</th>
                    <td><?php echo $pesan['noRek'];?></td>
                </tr>
                
            </table>
        <img  src="<?= base_url('assets/img/') . $pesan['bukti']; ?>"width="50%" class="img-fluid " alt="...">

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Verifikasi</button>
        </div>
        </div>
        </div>
        </div>
        <?php endforeach ?>
        <!-- Akhir Modal -->   
