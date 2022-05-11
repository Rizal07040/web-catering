<div class="container-fluid py-5">
    <div class="container">

<!-- Lihat Data Produk -->

<?php if ($this->session->flashdata('flah')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                 Data Produk <strong>berhasil</strong> <?php echo $this->session->flashdata('flah');?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php endif ?>


    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>admin/tambahproduk" class="btn btn-primary ">Tambah data Produk</a>

        </div>
    </div>
        <div class="row mt-4">
            <div class="col mt-4 col-sm-6 col-lg-10 ">
                <h3>Data Produk</h3>
                
                <div class="card">
                  
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                  <th scope="col">ID</th>
                  <th width="70px" scope="col">Gambar</th>
                  <th scope="col">Nama Produk</th>
                  <th scope="col">Harga Produk</th>
                  <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produk as $prd) : ?>
                    <tr>
                  <th scope="row"><?php echo $prd['id_produk']; ?></th>
                  
                  <td> <img src="<?= base_url('assets/img/') . $prd['gambar']; ?>"width="100%" class="img-fluid rounded-start " alt="..."> </td>
                  <td> <?php echo $prd['nama_produk']; ?> </td>
                  <td> <?php echo $prd['harga_produk']; ?> </td>
                  <td> <?php echo $prd['keterangan']; ?> </td>
                  <td> <a href="<?php echo base_url(); ?>admin/hapusproduk/<?php echo $prd['id_produk']; ?>" class="btn btn-danger float-end" role="button" onclick = "return confirm('yakin');">HAPUS</a></td>
                  <td> <a href="<?php echo base_url(); ?>admin/editproduk/<?php echo $prd['id_produk']; ?>" class="btn btn-secondary float-end" role="button" onclick="return confirm('yakin');">EDIT</a></td>
            </tr>
                <?php endforeach ?>
              </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Akhir Lihat Data Produk -->


</div>

  </div>
