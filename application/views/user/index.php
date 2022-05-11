<div class="container py-5">
    
                <h3 class="text-center mt-5 mb-4">Menu</h3>
             

              <a data-aos="zoom-out-right" href="<?= base_url('user/detailCart') ?>" type="button" class="btn btn-warning position-relative "> Keranjang 
                 <i class="bi bi-cart3"></i>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  <?php echo $this->cart->total_items() ?>
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </a>
  
  

  
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-1 ">
        <?php foreach($produk as $prd) : ?>
         <div class="col">
          <div  data-aos="flip-left" class="card bg-light h-100 border border-1" style="width: 18rem;">
            <a href="<?php echo base_url('assets/img/').$prd['gambar']; ?>" data-lightbox="menu-3" data-title="<?php echo $prd['nama_produk']; ?>">
              <img src="<?php echo base_url('assets/img/').$prd['gambar']; ?>"class="card-img-top" alt="">
            </a>
            <div class="card-body text-center">
              <div class="card-title text-dark text-center fw-bold text-uppercase"> <?php echo $prd['nama_produk']; ?></div>
              <h4 class="text-dark">Rp. <?php echo number_format( $prd['harga_produk'],0,',','.'); ?></h4>
            </div>
            <div class="mx-auto">
            <button data-aos="zoom-out-right" type = "button" name="beli" class="btn btn-danger mb-4" >DETAIL</button>
            <a data-aos="zoom-out-left" href="<?php echo base_url(); ?>user/addCart/<?php echo $prd['id_produk']; ?>" class="btn btn-success mb-4" role="button" >PESAN</a></td>
            
      </div>
      </div>
        </div>
        <?php endforeach; ?>
    
       

</div>
</div>

