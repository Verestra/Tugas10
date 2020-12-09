

<form name="form_produk" action="index.php?page=create" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="nama_produk">Nama Produk</label>
    <input type="hidden" name="id_produk" value="<?php echo $e['id_produk'];?>">
    <input type="text" class="form-control" id="nama_produk" placeholder="Masukkan Nama Produk" name="nama_produk" required value="<?php echo $e['nama_produk'];?>">
  </div>

  <div class="form-group">
    <label for="keterangan">Keterangan</label>
    <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" name="keterangan" required value="<?php echo $e['keterangan'];?>">
  </div>


  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="number" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga" required value="<?php echo $e['harga'];?>" min="1" max="900000000" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
  </div>

  <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="number" class="form-control" id="jumlah" placeholder="Masukkan Jumlah" name="jumlah" required value="<?php echo $e['jumlah'];?>" min="1" max="999" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>