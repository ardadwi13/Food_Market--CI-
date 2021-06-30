<div class="container-fluid">
    <div class="row text-center">
    <?php foreach ($seafood as $menu): ?>
<div class="card ml-3 mt-3" style="width: 16rem;">
  <img src="<?php echo base_url().'/uploads/'.$menu->gambar?>" class="card-img-top" style="width:250px; height:200px;" alt="...">
  <div class="card-body ">
    <h5 class="card-title mb-1"><?php echo $menu->nama_menu ?></h5>
    <small><?php echo $menu->keterangan ?></small><br>
    <span class="badge rounded-pill bg-success text-white mb-3">Rp.<?php echo number_format($menu->harga, 0,',','.') ?>
    </span><br>
    <?php echo anchor('dashboard/tambah_ke_keranjang/' .$menu->id_menu, '<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
    <?php echo anchor('dashboard/detail/' .$menu->id_menu, '<div class="btn btn-sm btn-success">Detail</div>') ?>
  </div>
</div>

    <?php endforeach; ?>
    </div>
</div>