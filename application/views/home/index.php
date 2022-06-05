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
          <div class="col mt-4 text-center"><br/>
            <h1 data-aos="zoom-out-left" class="mb-4 mt-4" style="font-family: 'Joan', serif;">Catering Mekar Jaya</h1><br/>
            <p data-aos="zoom-out-left" class="fs-4 text-muted" style="font-family: 'Joan', serif;">Merupakan salah satu usaha yang ada di Kota Surabaya beralamat di Jl. Tambak Grising 3/14, Kota Surabaya yang menyediakan jasa catering terdapat macam  layanan yang disediakan jajan trasional, prasmanan dan nasi kotak. </p>
            <br/><br/>
          <h1 data-aos="zoom-out-left" style="font-family: 'Dancing Script', cursive;">" Semua Kesedihan Berkurang dengan Hidangan Kami "</h1>
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
            <i class="fas fa-utensils fs-3"></i>
            </div>
          </div>
          <div class="mt-2 text-white text-center">
            <h4>BUFFET</h4>
            <p>Kami menawarkan paket prasmanan untuk acara resepsi atau acara pesta di tempat Anda.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mt-4">
          <div class="d-flex justify-content-center">
            <div class="icon-service d-flex align-items-center justify-content-center">
            <i class="fas fa-utensils fs-3"></i>
            </div>
          </div>
          <div class="mt-2 text-white text-center">
            <h4>SNACK BOX</h4>
            <p>Kami menawarkan paket snack box dengan berbagai macam kue dan jajanan tradisional yang lezat.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mt-4">
          <div class="d-flex justify-content-center">
            <div class="icon-service d-flex align-items-center justify-content-center">
            <i class="fas fa-utensils fs-3"></i>
            </div>
          </div>
          <div class="mt-2 text-white text-center">
            <h4>RICE BOX</h4>
            <p>Kami menawarkan paket nasi box untuk acara pesta, maupun untuk harian di rumah atau kantor Anda.</p>
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
    <div class="container ">
      <h2 data-aos="zoom-out-right" class="text-center mb-5">MENU</h2>
       <?php $i=0; ?>
      <div class="row ">
        <?php foreach($produk as $prd ) : ?>
         <?php if (++$i == 4) break;{ ?>
         <div class="col-sm-4 mt-4">
          <div  data-aos="flip-left" class="card bg-light h-100 shadow p-1  bg-body rounded" style="width: 23rem;">
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
            
      </div>
      </div>
        </div>
        <?php }; ?> 
        <?php endforeach; ?>
        </div>

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
        <div data-aos="zoom-out-right" class="col-sm-6 col-lg-4 ">
          <h4 class="mb-4">Hubungi Kami :</h4>
          <p>Terhubung dengan kami untuk mengetahui lebih banyak tentang apa yang kami lakukan.</p>
          <p><i class="bi bi-phone"></i> Phone/WA : +62 852-3004-5300</p>
          <p><i class="bi bi-cursor-fill"></i> JL.Tambak Grising 3/4 Surabaya</p>
        </div>
        <div data-aos="zoom-out-left" class="col-sm-6 col-lg-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.094232535001!2d112.73173731410222!3d-7.230092073008414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9212fad03bd%3A0xb3579c56af5f75c0!2sJl.%20Tambak%20Gringsing%20III%20No.4%2C%20Krembangan%20Utara%2C%20Kec.%20Pabean%20Cantikan%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060163!5e0!3m2!1sid!2sid!4v1647967465800!5m2!1sid!2sid" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Akhir Contact -->