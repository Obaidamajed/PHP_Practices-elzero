<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists مافي مشكلة لو موجود الملف
  ------ No Truncation ما بفضي الملف يعني ما بحذف اللي فيه
  ------ Pointer At The Beginning
  --- [c+] For Read & Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer
*/

//file() بترجع أرراي أوف إيليمنتش من اللاين اللي في الملف اللي بتكتبو 

echo '<pre>';
// print_r(file("86-obaidaM.txt"));
echo '</pre>';

// echo count(file("86-obaidaM.txt"));

$handle = fopen("86-obaidaM.txt", "r");

$line = 1;

// feof() بتشوف هل انت وصلت لنهاية الفايل او لا 
// ! feof($handle)= بينما احنا لسا ما وصلنا لنهاية الفايل 
// feof () test for end of file
while (! feof($handle)) {

  echo "Line $line => " . fgets($handle) . "<br>";
  // fgets () بتقرا لاين من الفايل 
  $line++;

}

// for ($i = 0; $i < count(file("elzero.txt")); $i++) {

//   echo fgets($handle) . "<br>";

// }// ما رح يقرأ إشي لأنو البوينتر وصل لنهاية الملف بسبب جملة الوايل اللي فوق جملة الفور

fclose($handle);