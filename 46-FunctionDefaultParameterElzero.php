<?php

  /*
    Function
    - Default Parameter Value
    --- Using
    --- Test Data
    --- Skip Arguments
  */

  function get_data($country = "Private Country", $name = "Private", $age = "Private", $address = "Private Address") {
    // if ($address === "") {
    //   $address = "Private Address";
    // }
    $line_one = "Your Country Is $country And Your Name Is $name <br>";
    $line_two = "Your Age Is $age And You Live In $address";
    return $line_one . $line_two;
  }

  echo get_data(address: "Cairo"); // هيك كتبت ااخر قيمة في البراميتر فقط والباقي بنكتب حسب الديفولت فاليو
  // ما بنفع الديفولت فاليو تكون بأول براميتر