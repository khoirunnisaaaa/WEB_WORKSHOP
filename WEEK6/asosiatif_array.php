<?php
  //first method to associate create array
  $salaries = array(
    "mohammad" => 2000,
    "qadir" => 1000,
    "zara" => 500
  );
  echo "Mohammad salary's $salaries[mohammad] <br/>";
  echo "Qadir salary's $salaries[qadir] <br/>";
  echo "Zara salary's $salaries[zara] <br/>";

  //second method to create array
  $salaries['mohammad'] = "high";
  $salaries['qadir'] = "medium";
  $salaries['zara'] = "low";
  echo "Mohammad salary's $salaries[mohammad] <br/>";
  echo "Qadir salary's $salaries[qadir] <br/>";
  echo "Zara salary's $salaries[zara] <br/>";
?>