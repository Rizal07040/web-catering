<div class="container-fluid py-5">

    <div class="container">

        <div class="row mt-4">
            <div class="col-md-6 mt-4">

                <div class="card">
                    <div class="card-header">
                        Form Edit User
                    </div>

                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php endif; ?>

                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3">
                                    <label for="nama" class="form-label">Nama User:</label>
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= $user['email']; ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group mb-3">
                                <label for="Alamat" class="form-label">Alamat:</label>
                                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?= $user['alamat']; ?>">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="noHp" class="form-label">No HP:</label>
                                <input type="text" class="form-control form-control-user" id="noHp" name="noHp" value="<?= $user['noHp']; ?>">
                                <?= form_error('noHp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>