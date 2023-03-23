<?php

  /*
    Array Functions

    - array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments

  */

  // Array Map

  function add_title($fname, $lname) {
    return "Hello Mr $fname $lname";
  }

  // echo add_title("Osama");

  $first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
  $last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];

  echo '<pre>';
  print_r(array_map("add_title", $first_names, $last_names)); // بطبق الفنكشن على الأرراي الثنين اللي حاطهم وبرجعلي اياه ك أرراي
  // $first_names = Osama = $fname , $last_names = Ameer = $lname . . . .
  print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $first_names, $last_names));
  echo '</pre>';
  // array_map() بطبق فنكشن على عناصر معينة وبرجعلي النتائج ك أرراي 
  
  
  // Array Filter
  
  
  $nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
  ];

  function check_nums($n1) {
    return $n1 > 4 ;
  }

  echo '<pre>';
  print_r(array_filter($nums, "check_nums")); // بشيك عالفاليو تبع الارراي اذا اكبر من 4 بطبعو مع الاندكس الخاص فيه
  echo '</pre>';

  echo "<br><hr>";
  
  $nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
  ];
  
  function check_num($n1) {
    return $n1 > 4 ;
  }
  
  echo '<pre>';
  print_r(array_filter($nums, "check_num", ARRAY_FILTER_USE_KEY)); // هيك بشيك عالكاي
  // ARRAY_FILTER_USE_VALUE بشيك عالفاليو , ديفولت
 
  echo '</pre>';

  echo "<br><hr>";
  
  $nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
  ];

  function check_numm($n1,$n2) {
    return $n1 > 4 || $n2 > 4 ; 
  }

  echo '<pre>';
  print_r(array_filter($nums, "check_numm", ARRAY_FILTER_USE_BOTH)); // بشيك عالفاليو تبع الارراي اذا اكبر من 4 بطبعو مع الاندكس الخاص فيه
  echo '</pre>';
 // ARRAY_FILTER_USE_BOTH بشيك عالكاي والفاليو وأي وحدة منهم فوق ال4 بطبعها 

