
<?php 
    $mysqli->query("UPDATE produk SET nama_produk     = '$_POST[nama_produk]',
                        keterangan    = '$_POST[keterangan]',
                        harga = '$_POST[harga]',
                        jumlah  = '$_POST[jumlah]'
                    WHERE id_produk = '$_POST[id_produk]'");

  header('location:index.php');
?>