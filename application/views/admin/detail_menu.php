<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
            <div class="card-body">
            <?php foreach($menu as $menu): ?>
                <div class="row">
                    <div class="col-md-4"><img src="<?php echo base_url(). '/uploads/' .$menu->gambar ?>" alt="" class="card-img-top"></div>
                    <div class="col-md-8">
                    <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?php echo $menu->nama_menu ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $menu->keterangan ?></strong></td>
                            </tr>
                            
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $menu->kategori ?></strong></td>
                            </tr>
                            
                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $menu->stok ?></strong></td>
                            </tr>
                            
                            <tr>
                                <td>Harga</td>
                                <td><strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format($menu->harga,0,',','.') ?></div></strong></td>
                            </tr>
                    </table>
                    <?php echo anchor('admin/data_menu/' , '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>