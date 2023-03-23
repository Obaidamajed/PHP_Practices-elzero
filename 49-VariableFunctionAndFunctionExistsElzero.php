<?php

  /*
    Function
    - Variable Function
    --- PHP Allow To Use Variable Like Function
    --- When You Append Parentheses () To Variable PHP Will Look For Function With That Name
    - Function Exists بتشوف اذا الفنكشن اللي بتناديها هل موجودة أم لا
    --- function_exists("Func Name")
  */

  function one() {
    return "One From Function";
  }

  // echo one();

  $func1 = "one";

  echo $func1(); // echo $func1() = echo one() This is a variable function

  echo '<br>';

  function say_hello_to($someone) {
    return "Hello $someone";
  }

  $func2 = "say_hello_to";

  echo $func2("Osama"); // $func2("Osama") = say_hello_to("Osama")

  echo '<br>';

  function testing() {
    return "Testing From Function";
  }

  if (function_exists("testing")) {
    echo testing();
  } else {
    echo "Function Not Found";
  }

  echo '<br>';

  // echo strlen("Elzero"); // 6

  // strlen() بعد الأحرف في الكلمة
  $func3 = "strlen";

  echo $func3("Elzero"); // = echo strlen("Elzero");