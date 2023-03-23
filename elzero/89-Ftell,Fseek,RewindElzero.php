<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File

  - ftell(File[Required])
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]
*/

$handle = fopen("86-obaidaM.txt", "r");

// echo ftell($handle) . "<br>"; // 0 Return Current Position Of The Pointer

// echo fgets($handle) . "<br>";

// echo fgets($handle) . "<br>";

// echo fgets($handle) . "<br>";

// echo ftell($handle) . "<br>"; // Return Current Position Of The Pointer

// rewind($handle); // Return The Pointer To The Beginning Of The File

// echo fgets($handle) . "<br>"; // obaida

// echo ftell($handle) . "<br>"; 
//  ----------------------------------------------
echo fgets($handle) . "<br>"; // obaida

// fseek($handle, 30); // حيطبع بعد البايتس 30 .. A New Line 1
// SEEK_CUR زودلي 30 من محل ما وصل البوينتر

fseek($handle, -8, SEEK_END); 
// SEEK_END روح نهاية الفايل و جيب آخر 8 بايتس 
echo fgets($handle) . "<br>"; // zero Web School

fclose($handle);

echo mb_strlen("obaida\r\nmajed\r\nsalah\r\nThis is ", "8bit");