<div class="container-fluid py-5">
    <div class="container">

<!-- Pembayaran -->

<div class="row mt-4">
            <h3>Pembayaran</h3>
           
            <div class="col-sm-6 mt-4">
            <div class="card">
                <div class="fw-bold card-header bg-warning">
                    Info Pembayaran
                </div>
                <div class="card-body">
                <p>Total Pesanan :</p>
                  <h1 class="text-warning">Rp. <?php echo number_format($pemesanan['total_pesanan'])  ?>.-</h1>
            
                
                </div>
                <div class="card-footer text-muted">
                    <p>Silahkan lakukan pembayaran DP 50% terlebih dahulu sebelum hari H. <br>
                    Jika tidak maka transaksi akan di batalkan. <br><br>

                    Pembayaran Bisa Melalui Rekening Di Bawah Ini: <br>
                    Nama Bank: Bank Negara Indonesia (BNI). <br>
                    No. Rek: 0449753964 <br>
                    Nama: ADI GUNAWAN. <br>

                    Kemudian lakukan konfirmasi di menu konfirmasi pembayaran.</p>

                </div>
            </div>
            

            </div>
            <div class="col-sm-6 mt-4">
                
                <div class="card">
                <div class="fw-bold card-header bg-warning">
                    Upload Bukti Pembayaran
                </div>
                <div class="card-body">
                                                
                <!-- <div class="form-group"> -->
                <form action="" method="post" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label for="atas_nama" class="form-label">Atas Nama</label>
                        <input type="text" class="form-control" id="atas_nama" name="atas_nama">
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama_bank" class="form-label">Nama Bank</label>
                        <input type="text" class="form-control" id="nama_bank" name="nama_bank">
                    </div>
                    
                    <div class="mb-3">
                        <label for="noRek" class="form-label">No.Rekening</label>
                        <input type="text" class="form-control" id="noRek" name="noRek">
                    </div>

                    <div class="mb-3">
                    <label for="bukti" class="form-label">Bukti Pembayaran</label>
                    <input class="form-control form-control-sm" id="bukti" type="file" name="bukti">
                    </div>

                    <button type="submit" name="pembayaran" class="btn btn-warning " role="button">Bayar</button>
                    
                    <a href="<?= base_url();?> user/bayar/<?= $pemesanan['id_pesanan'];?>" class="btn btn-success" role="button">Kembali</a>
                </form>
                <!-- </div> -->
                </div>

               
        </div>
    </div>
    <!-- Akhir Lihat Data Produk -->
    
</div>

</div>

  </div>
