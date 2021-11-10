<?php
  $date = getdate(date("U"));
  echo "$date[wday]-$date[mon]-$date[year]";
?>