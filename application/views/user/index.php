<div class="container py-5">
    
                <h3 class="text-center mt-5 mb-4">MENU</h3>
             

              <a data-aos="zoom-out-right" href="<?= base_url('user/detailCart') ?>" type="button" class="btn btn-warning position-relative "> Keranjang 
                 <i class="bi bi-cart3"></i>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  <?php echo $this->cart->total_items() ?>
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </a>
  
  

  
        <div class="row  ">
        <?php foreach($produk as $prd) : ?>
         <div class="col-sm-4 mt-4  ">
          <div  data-aos="flip-left" class="card bg-light h-100 shadow p-1  bg-body rounded" style="width: 25rem; ">
            <a href="<?php echo base_url('assets/img/').$prd['gambar']; ?>" data-lightbox="<?php echo $prd['gambar']; ?>" data-title="<?php echo $prd['nama_produk']; ?>">
              <img src="<?php echo base_url('assets/img/').$prd['gambar']; ?>" class="img-fluid" alt="">
            </a>
            <div class="card-body">
              <h5 class="card-title font-weight-bold"><a><?php echo $prd['nama_produk']; ?></a></h5>
  
              <p class="text-muted"> Catering Mekar Jaya</p>
              <p class="card-text">
                <?php echo $prd['keterangan']; ?>
              </p>
              <hr class="my-4" />
              <p class="lead"><strong>  <h4 class="text-muted">Rp. <?php echo number_format( $prd['harga_produk'],0,',','.'); ?>,-</h4></strong></p>
              
              <a data-aos="zoom-out-left" href="<?php echo base_url(); ?>user/addCart/<?php echo $prd['id_produk']; ?>" class="btn btn-success p-md-2 mb-0 float-end" role="button" >PESAN</a>
            </div>
      </div>
        </div>
        <?php endforeach; ?>
    
       

</div>
</div>

