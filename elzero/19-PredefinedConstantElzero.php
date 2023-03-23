<?php

  /*
    Pre-Defined Constants [Case Sensitive]
    - PHP_VERSION
    - PHP_OS_FAMILY
    - PHP_INT_MAX
    - DEFAULT_INCLUDE_PATH

    Magic Constants [Case Insensitive]
    - __LINE__
    - __FILE__
    - __DIR__

    Reserved Keywords
    - break
    - clone

    Search
    - PHP Predefined Constants
    - Compile Time vs Runtime
    - List of Reserved Words
  */

  define("BREAKS", "AA");

  echo php_uname(); // بعطيني معلومات عن نظام التشغيل
  echo '<br>';
  echo PHP_VERSION; // بتوصلني لإصدار ال بي أتش بي
  echo '<br>';
  echo __LINE__; // بجيبلي رقم اللاين اللي انا في حاليا
  echo '<br>';
  echo __FILE__; // بجيب عنوان الملف اللي انا فيه
  echo '<br>';
  echo __dir__; // بجيب الفولدر اللي هو فيه
  echo '<br>';
  echo BREAKS; 
  echo '<br>';
  // كلمة BREAK & CLONE هي من الكلمات المحجوزة في اللغة 
  // بالتالي ما بقبلها ك كونستانت 

  // // No Problem Here
  function hello() {
    return "Hello";
  }

  echo hello();

  // // Syntax Error => Reserved Word
  // function clone() {
  //   return "Clone";
  // }

  // echo clone();
  // في الفنكشن أيضا ما بقدر أستخدم الكلمات المحجوزة 