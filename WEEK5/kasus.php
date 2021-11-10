<?php
  $username = "khoirunnisa117";
  $unameAvailable = true;
  $password = " ";
  $confPass = "12345day";
  $name = " ";
  $match = true;

  //program login 
  echo "LOGIN <br>";

  //lakukan pengecekkan apakah username / password kosong / tidak match
  if ($username == " " || $password == " " || !$match){
    echo "Please check your username/password";
  } else {
    echo "Login success";
  }
  
  //program register
  echo "<br>";
  echo "REGISTER <br>";
  if ($username == " " || $password == " " || $confPass == " " || $name == " "){
    echo "There's empty data, please check it again!<br>";
  }
  if ($unameAvailable){
    echo "Username already taken";
  }

  //check gender
  echo "<br>";
  echo "CHECK GENDER <br>";
  $gender = "male";
  switch ($gender){
    case "male": echo "This is page for male";
      break;
    case "female": echo "This is page for female";
      break;
    default: echo "You haven't choose the gender";
      break;
  }

  //change password
  echo "<br>";
  echo "NEW PASSWORD <br>";
  $oldPass = "123day";
  $newPass = "yeaynew";
  $confNewPass = "yeayneww";

  if($oldPass == " " || $newPass == " " || $confNewPass == " "){
    echo "There's empty data, please check again";
  }
  if ($newPass == $confNewPass){
    echo "Password change success";
  } else {
    echo "Password & Conf password aren't match. Please check again";
  }

  //moneter analyze
  echo "<br>";
  echo "INCOME & EXPENDS ANALYZE <br>";
  $income = 1000000;
  $expends = 1020000;

  if ($income > $expends){
    echo "Yeay, you already save your income";
  } else {
    echo "Your expends not healthy, please manage your expends better!";
  }

?>