<?php
  $matrixA = array(
    array(3, 4, 7),
    array(5, 9, 2),
    array(7, 1, 3)
  );
  $matrixB = array(
    array(2, 9, 10),
    array(4, 3, 1),
    array(7, 7, 4)
  );

  for($i = 0; $i < count($matrixA); $i++){
    for($j = 0; $j < count($matrixA[$i]); $j++){
      echo $matrixA[$i][$j] + $matrixB[$i][$j];
      echo " ";
    }
    echo "<br>";
  }
?>