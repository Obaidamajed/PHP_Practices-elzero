<?php
$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];
echo "<pre>";
print_r(array_chunk($friends,2));
echo "</pre>";

echo "<br><hr>";
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

// echo "<pre>";
// print_r(array_combine($codes, $means));
// echo "</pre>";
// echo "<br>";
$Array_combine = array_combine($codes, $means);
echo "<pre>";
print_r(array_change_key_case($Array_combine));
echo "</pre>";

echo "<br><hr>";

$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

echo "<pre>";
print_r(array_flip($friends));
echo "</pre>";

echo "<br>";

echo "<pre>";
print_r(array_change_key_case(array_flip($friends)));
echo "</pre>";

echo "<br>";

echo "<pre>";
print_r(array_reverse(array_change_key_case(array_flip($friends))));
echo "</pre>";

echo "<br><hr>";

$nums = [10, 20, 30];

echo array_reduce($nums, function($n1,$n2)  { return $n1 + $n2; });
echo "<br>";
echo array_sum($nums);

echo "<br><hr>";


// function add($num){
//   for ($i = 0; $i<6; $i++){
//     if ($nums[$i] != 5){
//       return $nums[$i];
//     }
//   }
  
// }
// // echo add();
// print_r(array_map("add",$nums) );
// $nums = [5, 10, 20, 5, 30, 40];






















































