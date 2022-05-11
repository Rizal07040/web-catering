<div class="container py-5">
        <div class="row mt-4 justify-content-center">
            <div class="col mt-4 col-sm-6 col-lg-10 ">
                <h3 class="text-center mt-5 mb-4">Detail Pesan</h3>

                <?php echo form_open('user/updateCart'); ?>

                <table class="table table-striped table-hover ">

                <tr>
                        <th width='100px'>QTY</th>
                        <th >Nama Produk</th>
                        <th style="text-align:right">Harga</th>
                        <th style="text-align:right">Sub-Total</th>
                        <th class="text-center">Action</th>
                </tr>

                <thead>
                <tbody>

                <?php $i = 1; ?>
                
                <?php foreach ($this->cart->contents() as $items): ?>
                        <tr>
                        <td ><?php 
                        echo form_input(
                                array(
                                        'name' => $i.'[qty]', 
                                        'value' => $items['qty'], 
                                        'maxlength' => '3', 
                                        'min' => '0',
                                        'size' => '5',
                                        'type' => 'number',
                                        'class'=> 'form-control'
                                        )); 
                                        ?>
                        </td>
                        <td ><?php echo $items['name']; ?></td>
                        <td style="text-align:right ">Rp. <?php echo number_format($items['price']); ?></td>
                        <td style="text-align:right">Rp. <?php echo number_format($items['subtotal']); ?></td>
                        <td class="text-center">
                                <a href="<?= base_url('user/deleteCart/').$items['rowid']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                        </tr>
                
                <?php $i++; ?>
                
                <?php endforeach; ?>
                
                <tr>
                        <td colspan="3"> </td>
                        <td class="right"><h4>Total</h4></td>
                        <td class="right"><h4>Rp. <?php echo number_format($this->cart->total()); ?></h4></td>
                </tr>
                </tbody>
                </thead>


                </table>

               <div class="row">
                       <div class="col-sm-4">
                               
                               <button type="submit" class="btn btn-success ">Ubah</button>
                               <a href="<?= base_url('user/pengisiandata'); ?>" type="submit" class="btn btn-primary ">Pesan</a>
                       </div>
               </div>
               <?php echo form_close(); ?>
        
                </div>
        </div>
</div>
