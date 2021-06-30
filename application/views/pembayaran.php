<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
            <?php 
                 $grand_total=0;
                 if($keranjang = $this->cart->contents())
                 {
                     foreach($keranjang as $item)
                     {
                         $grand_total = $grand_total + $item['subtotal'];
                     }
                echo "<h4>Total Belanja anda : Rp. ".number_format($grand_total,0,',','.');
                  ?>
            </div><br><br>
            <h3>Input alamat pengiriman dan pembayaran</h3>
            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

                 <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                 </div>
                 
                 <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                 </div>

                 <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                 </div>
                 
                 <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select name="" id="" class="form-control">
                    <option value="">JNE</option>
                    <option value="">Ninja Express</option>
                    <option value="">JTE</option>
                    <option value="">SiCepat Express</option>
                    <option value="">JD.ID</option>
                    <option value="">Kang Paket</option>
                    </select>
                 </div>
                 
                 <div class="form-group">
                    <label for="">Pilih Bank</label>
                    <select name="" id="" class="form-control">
                    <option value="">BCA - XXXXXX</option>
                    <option value="">BNI - XXXXXX</option>
                    <option value="">BRI - XXXXXX</option>
                    <option value="">Mandiri - XXXXXX</option>
                    <option value="">BNN - XXXXXX</option>
                    <option value="">Syariah- XXXXXX</option>
                    </select>
                 </div>

                 <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>
                 <?php 
                    }else{
                        echo "<h5>Keranjang anda masih kosong";
                    }
                 ?>
        </div>        
        <div class="col-md-2"></div>
    </div>
</div>