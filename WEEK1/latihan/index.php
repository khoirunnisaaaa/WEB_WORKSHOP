<?php
  // Create database connection using config file
  include_once("config.php");
  // Fetch all users data from database
  $result = mysqli_query($mysqli, "SELECT * FROM anggota ORDER BY id 
  DESC");
?>
<html>
<head> 
  <title>Homepage | E41200183</title>
</head>
<body align="center">
  <a href="add.php">Tambahkan Anggota Kelompok</a><br/><br/>
    <table width='80%' border=1 align="center">
    <tr>
    <th>NIM</th> <th>Nama</th> <th>Golongan</th> 
    <th>Update</th>
    </tr>
    <?php 
      while($user_data = mysqli_fetch_array($result)) { 
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['golongan']."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | 
        <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>"; 
      }
    ?>
    </table>
  <section>
    <h3>TABEL HASIL PENGAMATAN</h3>
    <table width='50%' border=1 align="center">
      <tr>
        <td rowspan="7">Larutan</td>
        <td rowspan="2">Perlakuan</td>
        <td colspan="2">Hasil Pengamatan</td>
      </tr>
      <tr>
        <td>Gelembung</td>
        <td>Nyala Api</td>
      </tr>
      <tr>
        <td>Panas</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Dingin</td>
        <td>+</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Asam</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Basa</td>
        <td>++</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Netral</td>
        <td>+++</td>
        <td>++</td>
      </tr>
    </table>
  </section>
</body>
</html>