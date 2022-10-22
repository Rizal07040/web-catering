<div class="container-fluid py-5">

    <div class="container">




        <div class="row mt-4">
            <div class="col-sm-6 mt-4">
                <div class="card bg-light">
                    <div class="card-header bg-warning">
                        Daftar Pesanan
                    </div>

                    <div class="card-body">
                        <?php if (validation_errors()) : ?>

                        <?php endif; ?>



                        <form action="<?= base_url('user/proses_pesanan'); ?>" method="post" enctype="multipart/form-data">


                            <div class="form-group">

                                <div class="mb-3">
                                    <label for="tgl_ambil" class="form-label">Tanggal Ambil</label>
                                    <input type="date" class="form-control" id="tgl_ambil" name="tgl_ambil">
                                    <?= form_error('tgl', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Penerima</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="noHp" class="form-label">Nomor Telephone</label>
                                    <input type="number" class="form-control" id="noHp" name="noHp" value="<?= $user['noHp']; ?>">
                                    <?= form_error('noHp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Ongkir</label>
                                    <select class="form-select" aria-label="Default select example" id="ongkir" name="ongkir" onclick="OnSelectedIndexChange();">
                                        <?php foreach ($kota as $k) : ?>
                                            <!-- <?php $w = $k['ongkir']; ?>  -->
                                            <option value="<?= $k['id_kota']; ?>"><?= $k['nama_kota']; ?> - <?= $w = $k['ongkir']; ?> </option>

                                        <?php endforeach; ?>
                                        <?php var_dump('noHp') ?>
                                        <?= $u = $w ?>
                                    </select>
                                </div>
                                <div class="mb-3">

                                    <label for="alamat" class="form-label">Alamat_lengkap</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>">
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <!-- simpan database -->
                            <input type="hidden" id="total_pesanan" name="total_pesanan" value="<?php echo $total_pesanan = $this->cart->total() + $u ?>">

                            <!-- akhir simpan -->

                            <button type="submit" name="proses" class="btn btn-primary float-end">Proses</button>
                    </div>
                    </form>
                </div>

            </div>



            <div class="col-sm-6 mt-4">
                <div class="card bg-light">
                    <div class="card-header bg-warning">
                        Daftar Pesanan
                    </div>
                    <div class="card-body">

                        <table class="table ">

                            <tr>
                                <th width='100px'>QTY</th>
                                <th>Nama Produk</th>
                                <th style="text-align:right">Harga</th>
                                <th style="text-align:right">Sub-Total</th>

                            </tr>

                            <thead>
                            <tbody>


                                <?php foreach ($this->cart->contents() as $items) : ?>
                                    <tr>
                                        <td><?php echo $items['qty']; ?></td>
                                        <td><?php echo $items['name']; ?></td>
                                        <td style="text-align:right ">Rp. <?php echo number_format($items['price']); ?></td>
                                        <td style="text-align:right">Rp. <?php echo number_format($items['subtotal']); ?></td>
                                    </tr>



                                <?php endforeach; ?>

                            </tbody>
                            </thead>


                        </table>


                    </div>
                </div>
                <div class="card bg-light mt-4">
                    <div class="card-header bg-warning">
                        Daftar Pesanan
                    </div>
                    <div class="card-body">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Total Harga : Rp. <?php echo $this->cart->total() ?></li>
                            <li class="list-group-item">Ongkir : Rp. <?= $u ?></li>
                            <li class="list-group-item" name="total_pesanan">Total Pesanan : Rp. <?php echo $total_pesanan  ?> </li>
                        </ul>

                    </div>
                </div>
            </div>




        </div>

    </div>

</div>
<script>
    console.log('aaaa');
    var e = document.getElementById("ongkir");

    function OnSelectedIndexChange() {
        var value = e.value;
        var text = e.options[e.selectedIndex].text;

        console.log('text : ', e.options[e.selectedIndex]);
        alert(text);

    }
</script>