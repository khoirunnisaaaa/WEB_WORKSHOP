<?php
require ('koneksi.php');
$id =$_GET['id'];

$query = "DELETE FROM user_detail WHERE id='$id'";
$result = mysqli_query($koneksi, $query)or die (mysql_error());;
header('Location: home.php');
?>