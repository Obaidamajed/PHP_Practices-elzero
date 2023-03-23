<?php

  /*
    Control Structure
    - Loop

    Foreach
  */

  $countries = ["EG", "SA", "QA", "SY"]; // array with only value

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  // foreach(array name as value)
  foreach ($countries as $country) { //foreach i print value through it(foreach)

    echo $country . "<br>";

  }

  $countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70]; // array with key&value

  echo '<pre>';
  print_r($countries_with_discount);
  echo '</pre>';

  // foreach(array name as key => value)
  foreach ($countries_with_discount as $country => $discount) : // print key and

    echo "Country Name Is $country And Discount Is $discount <br>";

  endforeach;



  
  echo "<br>";
  foreach ($countries_with_discount as $country) : // print value

    echo "Country Name Is $country <br>";

  endforeach;
