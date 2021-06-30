<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT MENU</h3>

    <?php foreach($menu as $menu) : ?>

    <form method="post" action="<?php echo base_url(). 'admin/data_menu/update' ?>">
        <div class="form-group">
            <label for="">Nama Menu</label>
            <input type="text" name="nama_menu" class="form-control" value="<?php echo $menu->nama_menu ?>">
        </div>
        
        <div class="form-group">
            <label for="">Keterangan</label>
            <input type="hidden" name="id_menu" class="form-control" value="<?php echo $menu->id_menu ?>">
            <input type="text" name="keterangan" class="form-control" value="<?php echo $menu->keterangan ?>">
        </div>
        
        <div class="form-group">
            <label for="">Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?php echo $menu->kategori ?>">
        </div>

        <div class="form-group">
            <label for="">Harga</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $menu->harga ?>">
        </div>
        
        <div class="form-group">
            <label for="">Stok</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $menu->stok ?>">
        </div>

        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
    </form>
        
        <?php endforeach; ?>
</div>