<?php
  echo "MEMBUAT FUNGSI <br>";
  function berhasil(){
    echo "SELAMAT ANDA BERHASIL";
  };
  function gagal(){
    echo "MAAF ANDA GAGAL";
  };

  $nilai = 90;
  if($nilai >= 75){
    berhasil();
  } else {
    gagal();
  };

  echo "<br>";


  echo "FUNGSI DENGAN PARAMETER <br>";
  function jumlah($a, $b){ //fungsi dengan 2 parameter
    return $a + $b; //nilai kembali
  } 
  $nilai1 = 10;
  $nilai2 =15;
  echo jumlah($nilai1, $nilai2); //passing parameter
  echo "<br>";


  echo "FUNGSI BAWAAN <br>";
  $sekarang  = getdate();
  print_r($sekarang); //hasil berupa array
  echo "<br>";
  echo "Sekarang Tanggal : ".$sekarang['mday']; //ambil elemen untuk menampilkan tanggal

?>