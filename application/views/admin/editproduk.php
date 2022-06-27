<div class="container-fluid py-5">

    <div class="container">

        <div class="row mt-4">
            <div class="col-md-6 mt-4">

                <div class="card">
                    <div class="card-header">
                        Form Edit
                    </div>

                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php endif; ?>

                        <form action="" method="post" enctype="multipart/form-data">


                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Input Gambar</label>
                                    <input class="form-control form-control-sm" id="gambar" type="file" name="gambar" value="<?= $produk['gambar']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $produk['nama_produk']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="harga_produk" class="form-label">Harga Produk</label>
                                    <input type="number" class="form-control" id="harga_produk" name="harga_produk" value="<?= $produk['harga_produk']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $produk['keterangan']; ?>">
                                </div>


                            </div>

                            <button type="submit" name="editproduk" class="btn btn-primary float-end">Edit Data </button>

                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>