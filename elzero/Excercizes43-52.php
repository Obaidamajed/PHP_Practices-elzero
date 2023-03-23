<?php

function greeting($name, $gender=""){
  if ($gender == "Male"){
    echo "hello Mr $name ";
  }
  elseif ($gender == "Female"){
    echo "hello Miss $name";
  }
  else {
    echo "hello $name";
  }
}
echo greeting("obaida", "Male") . "<br>";
echo greeting("aseel", "Female") . "<br>";
echo greeting("ali") . "<br>";
echo "------------------------------<br>";
