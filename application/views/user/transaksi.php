<div class="container-fluid py-5">

    <div class="container">
        
    <div class="row mt-4">
        <div class="col-md-6 mt-4">

            <div class="card">
                <div class="card-header">
                    Form pengisian data pembeli
                </div>
                
                <div class="card-body">
                <?php if( validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo validation_errors();?>
                        </div>
                        <?php endif; ?>

                        
                        
                        <form  action="<?= base_url('user/transaksi'); ?>" method="post" enctype="multipart/form-data">
                            
                            
                            <div class="form-group">

                            
                            <div class="mb-3">
                                <label for="total" class="form-label">Total</label>
                                <input type="number" class="form-control" id="total" name="total"
                                >
                            </div>

                            <div class="mb-3">
                                <label for="bayar" class="form-label">Bayar</label>
                                <input type="number" class="form-control" id="bayar" name="bayar" >
                            </div>
                            

                                
                            <label for="keterangan_bayar" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan_bayar" name="keterangan_bayar"
                                >
                            </div>
                            
                            
                            
                        </div>
                           
                        <button type = "submit" name="proses" class="btn btn-primary float-end" >Proses</button> 
                        
                    </div> 
                    
                    
                    </form>
                </div>
          </div>
        </div>
    </div>
</div>
</div>