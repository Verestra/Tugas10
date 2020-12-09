
      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Produk</th>
              <th>Keterangan</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>


<?php 
            $no = 0;
            $produk=$mysqli->query("SELECT * FROM produk");
            while($m=mysqli_fetch_array($produk)){
            $no++;    
?>  

<?php 
            include"paging.php";
            $p   = new paging_produk;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $produk=$mysqli->query("SELECT * FROM produk 
            ORDER BY id_produk DESC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($produk)){   
            $no++;
?>

            <tr>
              <th scope="row"><?php echo $no;?></th>
              <td><?php echo $m['nama_produk']; ?></td>
              <td><?php echo $m['keterangan']; ?></td>
              <td><?php echo $m['harga']; ?></td>
              <td><?php echo $m['jumlah']; ?></td>
              <td>
               <a href="index.php?page=edit&id_produk=<?php echo $m['id_produk'];?>"><i class="fa fa-pencil"></i></a> | 
               <a href="index.php?page=delete&id_produk=<?php echo $m['id_produk'];?>"><i class="fa fa-trash-o"></i></a>
              </td>
            </tr>

            <?php } ?>
            
          </tbody>
        </table>

      <div class="halaman">
        <nav aria-label="...">
          <ul class="pagination">

          <?php } ?>
          <?php 
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM produk"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>