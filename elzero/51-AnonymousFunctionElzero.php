<?php

  /*
    Function
    - Anonymous Function فنكشن ما الها اسم
    --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
    --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function

    Search
    - Closure
  */

  // Normal Function With Parameter

  function say_hello_to($someone) {
    return "Hello $someone";
  }

  echo say_hello_to("Osama");

  echo '<br>#########<br>';

  // Anonymous Function In Variable

  $say_hello = function() {
    return "Hello";
  };

  echo $say_hello();

  echo '<br>#########<br>';

  // Anonymous Function With Parameter In Variable

  $say_hola = function($someone) {
    return "Hola $someone";
  };

  echo $say_hola("Osama");

  echo '<br>#########<br>';

  // Inherit Variable From Parent Scope

  $msg = "Hi";

  $say_hi = function($someone) use ($msg) { // use ($msg) بهادا الكود قدرت أستخدم الفاريابل مسج اللي خارج الفنكشن بداخل الفنكشن
    return "$msg $someone";
  };

  echo $say_hi("Osama");

  echo '<br>#########<br>';

  // Pass Anonymous Function To Function => array_map

  $nums = [10, 20, 30, 40, 50];

  function add_five($item) {
    return $item + 5;
  }

  $nums_after_adding_five = array_map("add_five", $nums); // array_map("function", array) الفنكشن بتتنفذ على كل عنصر من عناصر الأرراي وفي الآخر بترجعلي أرراي

  echo '<pre>';
  print_r($nums_after_adding_five);
  echo '</pre>';

  $nums_after_adding_ten = array_map(function($item) { return $item + 10; }, $nums);
  // function($item) { return $item + 10; } This is annonymous function, without name 
  // انونيموس فنكشن ما الها فنكشن برا, هي معمولة مشان هذا الغرض او هذا الاستعمال 
  echo '<pre>';
  print_r($nums_after_adding_ten);
  echo '</pre>';