<!-- Jumbroton -->
<section class="jumbotron jumbotron-fluid">
  <div data-aos="zoom-in-up" class="container">

    <img src="<?php echo base_url('assets/'); ?>img/logo.png" class="rounded mt-5" alt="logo" width="250px">
    <h3 style="color: white;" class="display-6 ">Makan enak sampai <br> perut kenyang. </h3>
    <a data-aos="zoom-out-right" class="btn ms-4 mt-4 btn-lg main-color" href="<?= base_url('auth/'); ?>" role="button">Pesan Sekarang<span class="bi bi-arrow-right"></span></a> \

  </div>
</section>
<!-- Akhir Jumbroton -->

<!-- About -->
<section id="about">
  <div class="about">
    <div class="container-fluid mt-4 py-5">
      <div class="container">
        <div class="row mt-4 ">
          <div class="col mt-4">
            <img data-aos="zoom-out-right" src="<?php echo base_url('assets/'); ?>img/about.jpg" class="rounded float-start" alt="about" style="width: 28rem;">
          </div>
          <div class="col mt-4">
            <p data-aos="zoom-out-left" class="fs-6 text-primary">About us</p>
            <h1 data-aos="zoom-out-left" class="mb-4">All sorrows are less with food</h1>
            <p data-aos="zoom-out-left" class="fs-5 text-muted">Serasa makan menikmati makanan dirumah sendiri dengan menu yang bervariasi dan masakan yang kaya dengan bumbu tradisonal.</p>
          </div>
        </div>

      </div>
    </div>
  </div>

</section>
<!-- Akhir About -->

<!-- Service -->

<section id="service">
  <div class="container-fluid mt-4 py-5 main-color">
    <div class="container ">
      <h2 data-aos="zoom-out-right" class="text-light text-center">Kami melayani</h2>

      <div data-aos="zoom-in-up" class="row justify-content-center">
        <div class="col-sm-6 col-lg-4 mt-4">
          <div class="d-flex justify-content-center">
            <div class="icon-service d-flex align-items-center justify-content-center">
              <i class="bi bi-bicycle display-6"></i>
            </div>
          </div>
          <div class="mt-2 text-white text-center">
            <h3>Delevery</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo suscipit necessitatibus quibusdam accusantium ipsam velit!</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mt-4">
          <div class="d-flex justify-content-center">
            <div class="icon-service d-flex align-items-center justify-content-center">
              <i class="bi bi-bicycle display-6"></i>
            </div>
          </div>
          <div class="mt-2 text-white text-center">
            <h3>Delevery</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo suscipit necessitatibus quibusdam accusantium ipsam velit!</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mt-4">
          <div class="d-flex justify-content-center">
            <div class="icon-service d-flex align-items-center justify-content-center">
              <i class="bi bi-bicycle display-6"></i>
            </div>
          </div>
          <div class="mt-2 text-white text-center">
            <h3>Delevery</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo suscipit necessitatibus quibusdam accusantium ipsam velit!</p>
          </div>
        </div>





      </div>
    </div>

  </div>
</section>
<!-- Akhir Service -->

<!-- Menu -->
<section id="menu">


  <div class="container-fluid py-5">
    <div class="container">
      <h2 data-aos="zoom-out-right" class="text-center mb-5">MENU</h2>
       <?php $i=0; ?>
      <div class="row row-cols-1 row-cols-md-4 g-4 ">
        <?php foreach($produk as $prd ) : ?>
         <?php if (++$i == 5) break;{ ?>
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
            <a data-aos="zoom-out-right" type = "button" name="beli" class="btn btn-danger mb-4" href="<?= base_url('auth/'); ?>">DETAIL</a>
            <a data-aos="zoom-out-left" href="<?= base_url('auth/'); ?>" class="btn btn-success mb-4" role="button" >PESAN</a></td>
            
      </div>
      </div>
        </div>
        <?php }; ?> 
        <?php endforeach; ?>

      <div class="mt-4 d-flex mx-auto justify-content-center">
        <a data-aos="zoom-out-right"class="btn ms-4 mt-4 btn-lg main-color" href="<?= base_url('auth/'); ?>" role="button">Lainnya<span class="bi bi-arrow-right"></span></a>
      </div>
    </div>

  </div>
  </div>
</section>
<!-- Akhir menu -->

<!-- Contact -->
<section id="contact">
  <div class="container-fluid mt-4 py-5 main-color">
    <div class="container ">
      <div class="row ">
        <div data-aos="zoom-out-right" class="col-4 ">
          <h4 class="mb-4">Hubungi Kami :</h4>
          <p>Terhubung dengan kami untuk mengetahui lebih banyak tentang apa yang kami lakukan.</p>
          <p><i class="bi bi-phone"></i> Phone/WA : +62 852-3004-5300</p>
          <p><i class="bi bi-cursor-fill"></i> JL.Tambak Grising 3/4 Surabaya</p>
        </div>
        <div data-aos="zoom-out-left" class="col">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.094232535001!2d112.73173731410222!3d-7.230092073008414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9212fad03bd%3A0xb3579c56af5f75c0!2sJl.%20Tambak%20Gringsing%20III%20No.4%2C%20Krembangan%20Utara%2C%20Kec.%20Pabean%20Cantikan%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060163!5e0!3m2!1sid!2sid!4v1647967465800!5m2!1sid!2sid" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Akhir Contact -->