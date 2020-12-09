<?php 
   $hapus=$mysqli->query("select * from produk where id_produk='$_GET[id_produk]'");
    $mysqli->query("DELETE FROM produk WHERE id_produk='$_GET[id_produk]'");
    header('location:index.php');
?>