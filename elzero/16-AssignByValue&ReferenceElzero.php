<?php

  /*
    Assign Variable By Reference
    - By Default, Variables Are Always Assigned By Value
    - Assigned By Reference Make Variable Alias Or Point To Another

    Search
    - References Are Not Pointers
  */

  $a = "Osama";
  $b =  &$a;
  $b = "Elzero";
  $a = "School";
  $b = "obaida";
  // this is Assigned By Reference

  echo $a;
  echo '<br>';
  echo $b;