
<div class="container-fluid py-5">
    <div class="container">

        <div class="row mt-4">
            <div class="col mt-4">

            <div class="card">
                <div class="card-body">
                    <h3><i class="bi bi-clipboard2"></i>Laporan Penjualan </h3>
                <div class="col-md-3 offset-md-9 fs-4">Tanggal :<?= $tanggal ?>/<?= $bulan ?>/<?= $tahun ?></div>
                <table class="table table-striped table-hover fs-5">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Harga_Produk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total Harga</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                                    $grandTotal = 0; ?>
                            <?php foreach($laporan as $lp) : 
                                $total = $lp->jumlah * $lp->harga;
                                $grandTotal = $grandTotal + $total ?>
                                <tr>
                                    <th ><?php echo $no++ ?></th>
                                    <td> <?php echo $lp->nama_produk ?> </td>
                                    <td>Rp. <?php echo number_format($lp->harga) ?>,- </td>
                                    <td> <?php echo $lp->jumlah ?> </td>
                                    <td>Rp. <?php echo number_format($total) ?>,- <br>
                                    
                                </tr>
                                
                        
                        <?php endforeach ?>
                        <tr>
                        <td colspan="3"> </td>
                        <td class="right"><h4>Grand Total :</h4></td>
                        <td class="right"><h4>Rp. <?php echo number_format($grandTotal); ?>,-</h4></td>
                </tr>

                        
                    </tbody>
                </table>
                <!-- Button trigger modal -->

                <div class="row justify-content-start">
                    <div class="col-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Pilih Tanggal
                    </button>
                    </div>
                    <div class="col-10">
                        <button class="btn btn-primary" onclick="window.print()"><i class="bi bi-printer"></i></button>
                    </div>
                </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tanggal Laporan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
            <div class="col">
           
                <?= form_open('admin/laporanPenjualan/') ?>
                <div class="row">
                    <v class="col-sm-3">
                    <div class="form-group">
                    <label >Tanggal</label>
                    <select name="tanggal" class="form-control">
                        <?php $mulai = 1;
                        for ($i = $mulai; $i < $mulai + 31; $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        } ?>
                    </select>
                </div>
                    </v>
                    <div class="col-sm-3">
                    <div class="form-group">
                    <label >Bulan</label>
                    <select name="bulan" class="form-control">
                        <?php $mulai = 1;
                        for ($i = $mulai; $i < $mulai + 12; $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        } ?>
                    </select>
                </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                    <label >Tahun</label>
                    <select name="tahun" class="form-control">
                        <?php $mulai = 2022;
                        for ($i = $mulai; $i < $mulai + 7; $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        } ?>
                    </select>
                </div>
                    </div>
                    <div class="col-sm-2 mt-4 ">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-clipboard2-check"></i></button>
                </div>
                </div>
            </div>
            <?= form_close() ?>
            
            
            </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>