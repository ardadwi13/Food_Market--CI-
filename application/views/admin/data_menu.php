<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_menu"><i class="fas fa-plus fa-sm"></i> Tambah Data </button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA MENU</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>
        
        <?php
        $no=1;
            foreach($menu as $menu) : ?>
        <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $menu->nama_menu ?></td>
                <td><?php echo $menu->keterangan ?></td>
                <td><?php echo $menu->kategori ?></td>
                <td><?php echo $menu->harga ?></td>
                <td><?php echo $menu->stok ?></td>
                <td><?php echo anchor('admin/data_menu/detail_menu/' .$menu->id_menu, '<div class="btn btn-sm btn-success"><i class="fas fa-search-plus"></i></div>')?></td>
                <td><?php echo anchor('admin/data_menu/edit/' .$menu->id_menu, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
                <td><?php echo anchor('admin/data_menu/hapus/' .$menu->id_menu,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
        </tr>
        
        <?php endforeach; ?>

    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT MENU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_menu/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
    
        <div class="form-group">
                <label>Nama Menu</label>
                <input type="text" name="nama_menu" class="form-control">
        </div>
        
        <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
        </div>
        
        <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                <option>salad</option>
                <option>seafood</option>
                <option>meat</option>
                <option>junk food</option>
                <option>drink</option>
                </select>
        </div>
        
        <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
        </div>
        
        <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
        </div>
        
        <div class="form-group">
                <label>Gambar Menu</label><br>
                <input type="file" name="gambar" class="form-control">
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>