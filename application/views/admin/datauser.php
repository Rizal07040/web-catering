<div class="container-fluid py-5">
    <div class="container">

<!-- Flash Data -->
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
<!-- Akhir Flash Data -->
    
<!-- Lihat Data user -->
        <div class="row mt-4">
            <div class="col mt-4 col-sm-6 col-lg-10 ">
                <h3>Data User</h3>
                
                <div class="card">
                  
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Telephone</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($user as $usr) : ?>
                    <tr>
                  <th scope="row"><?php echo $usr['id_user']; ?></th>
                  <td> <?php echo $usr['nama']; ?> </td>
                  <td> <?php echo $usr['email']; ?> </td>
                  <td> <?php echo $usr['alamat']; ?> </td>
                <td> <?php echo $usr['noHp']; ?> </td>
                <td> <?php echo $usr['status']; ?> </td>
                <td> <a href="<?php echo base_url(); ?>admin/hapususer/<?php echo $usr['id_user']; ?>" class="btn btn-danger" role="button" onclick = "return confirm('yakin');"><i class="bi bi-trash"></i></a></td>
            </tr>
                <?php endforeach ?>
              </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Akhir Lihat Data user -->


</div>

  </div>
