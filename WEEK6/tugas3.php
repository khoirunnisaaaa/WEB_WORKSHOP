<?php
  function perbandingan($a, $b){
    if($a > $b){
      return $a;
    } else {
      return $b;
    }
  }
  echo "Bilangan terbesarnya adalah ".perbandingan(100, 150);

?>