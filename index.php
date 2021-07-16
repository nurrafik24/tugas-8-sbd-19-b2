<html>
<head>
      <title>Menampilkan Data Tabel MySQL</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
         </style>
   </head>
   <body>
      <center><h1>Sewa PS</h1></center>
      <h3>Tabel Penjaga </h3>
      <table>
         <thead>
            <tr>
               <th>ID Penjaga</th>
               <th>Nama</th>
               <th>No.Hp</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM penjaga';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_penjaga'] ?></td>
               <td><?php echo $row['nama_penjaga'] ?></td>
               <td><?php echo $row['no_hp'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
        </table>
        <h3>Tabel Penyewa </h3>
      <table>
         <thead>
            <tr>
               <th>ID Penyewa</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>Kontak</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM penyewa';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_penyewa'] ?></td>
               <td><?php echo $row['nama_penyewa'] ?></td>
               <td><?php echo $row['alamat'] ?></td>
               <td><?php echo $row['kontak_penyewa'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
        </table>
        <h3>Tabel PS </h3>
      <table>
         <thead>
            <tr>
               <th>ID PS</th>
               <th>Warna PS</th>
               <th>Type PS</th>
               <th>Merk PS</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM ps';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_ps'] ?></td>
               <td><?php echo $row['warna_ps'] ?></td>
               <td><?php echo $row['type_ps'] ?></td>
               <td><?php echo $row['merk_ps'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
        </table>
        <h3>Tabel Sewa </h3>
      <table>
         <thead>
            <tr>
               <th>ID Sewa</th>
               <th>ID Penjaga</th>
               <th>ID Penyewa</th>
               <th>ID PS</th>
               <th>Jam Pinjam</th>
               <th>Jam Kembali</th>
               <th>Total Bayar</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM sewa';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_sewa'] ?></td>
               <td><?php echo $row['id_penjaga'] ?></td>
               <td><?php echo $row['id_penyewa'] ?></td>
               <td><?php echo $row['id_ps'] ?></td>
               <td><?php echo $row['jam_pinjam'] ?></td>
               <td><?php echo $row['jam_kembali'] ?></td>
               <td><?php echo $row['total_bayar'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
        </table>


</html>