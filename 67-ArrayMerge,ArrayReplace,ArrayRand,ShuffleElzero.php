<?php

  /*
    Array Functions

    - array_merge(Array[Required], Other_Array/s[Optional])
    --- Merge One Or More Arrays
    ------ Later Array Key With The Same Name Override The Value Of The Previous One
    ------ Numeric Key Will Be Renumbered

    - array_replace(Array[Required], Replacement/s[Optional])
    --- Replaces Elements From Passed Arrays Into The First Array
    ------ Same Key => Value In Second Array Replace Same Key => Value In First Array
    ------ If Key In Second Array Not Found In Fisrt Array It Will Be Created

    - array_rand(Array[Required], Num[Optional])
    --- Pick One Or More Random Keys Out Of An Array

    - shuffle(Array[Required])
    --- Shuffle An Array
  */


  $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $merge_two = ["One" => "HTML", "Four" => "Python"];

  echo '<pre>';
  print_r(array_merge($merge_one, $merge_two));//بتعمل دمج بين الأرراي الثنين وأي كاي في الأرراي الثاني موجود بالأرراي الاول حيعمل اوفر رايت عالأرراي الأول
  echo '</pre>';

  $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
  $merge_four = [40 => "Python", "10" => "Go"];

  echo '<pre>';
  print_r(array_merge($merge_three, $merge_four)); // هون برتب الكاي اوتوماتيكي ابتداءا من الصفر , بعمل رينومبر
  echo '</pre>';

  $main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $replace = ["One" => "HTML", "Four" => "Python"];

  echo '<pre>';
  print_r(array_replace($main, $replace)); // ببدل قيم الارراي الاولى بقيم الارراي الثانية
  echo '</pre>';

  echo '<pre>';
  print_r(array_replace($merge_three, $merge_four));// فرقو عن الميرج إنو ما بعمل رينومبر وبنفس الوقت بعمل ريبلاس
  echo '</pre>';

  $nums = ["A", "B", "C", "D"];

  echo array_rand($nums) . "<br>"; // برجعلي الكاي الخاص بأرراي نومز
  echo $nums[array_rand($nums)] . "<br>";

  echo '<pre>';
  print_r(array_rand($nums, 3)); // برجعلي أكتر من عنصر من أرراي النومز بشكل عشوائي 
  echo '</pre>';

  shuffle($nums); // بخربط الأرراي

  echo '<pre>';
  print_r($nums); // عملت للأرراي شوفل بعدين طبعتو
  echo '</pre>';