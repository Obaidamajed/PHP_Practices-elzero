<?php

  /*
    Cookies
    - Modify
    - Delete
    - Add Array
  */


  // setcookie("style", "dark"); for create cookie 

  // setcookie("style", "light"); for edit cookie 
  // setcookie("style", "light", strtotime("+1 year")); for edit cookie , edit value&expire
  
  // setcookie("style", "light", time() -1); for edit cookie

  setcookie("style[color]", "red");
  setcookie("style[font]", "Tahoma");
  setcookie("style[layout]", "boxed");

  echo "<pre>";
  print_r($_COOKIE); // بطبعلي أرراي رئيسي اسمو ستايل وبداخلو 3 أرراي
  echo "</pre>";

  if (isset($_COOKIE["style"])) {
    echo $_COOKIE["style"]["color"];
  }