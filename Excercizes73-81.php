<?php
echo rand(11, 19);
echo "<br>";
echo rand(11, 19);
echo "<br>";
echo rand(11, 19);
echo "<br>";
echo rand(11, 19);

echo "<br><hr>";

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
echo $friends[array_rand($friends)] ;
echo "<br>";
echo $friends[array_rand($friends)] ;
echo "<br><hr>";
$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7
echo round($num1,0,PHP_ROUND_HALF_DOWN);
echo "<br>";
echo round($num1,0,PHP_ROUND_HALF_ODD);
echo "<br>";

echo round($num2,1);
echo "<br>";

echo round($num3,0,PHP_ROUND_HALF_DOWN);
echo "<br>";
echo ceil($num3);
echo "<br><hr>";
// echo "<pre>";
// print_r(filter_list());
// echo "</pre>";
// echo filter_id("int");
// echo filter_id("boolean");
// echo filter_id("float");
// echo filter_id("validate_regexp");
// echo filter_id("validate_domain");
// echo filter_id("validate_url");
// echo filter_id("validate_email");
// echo filter_id("validate_ip");
// echo filter_id("validate_mac");
// echo filter_id("string");
// echo filter_id("stripped");
// echo filter_id("encoded");
// echo filter_id("special_chars");
// echo filter_id("full_special_chars");
// echo filter_id("unsafe_raw");
// echo filter_id("email");
// echo filter_id("url");
// echo filter_id("number_int");
// echo filter_id("number_float");
// echo filter_id("add_slashes");
// echo filter_id("callback");
// $array = filter_list();
$FilterId=[filter_id("int") => "int" , filter_id("boolean")=>"boolean",filter_id("float")=>"float",filter_id("validate_regexp")=>"validate_regexp"]; // وضحت الفكرة خلص
echo "<pre>";
print_r($FilterId);
echo "</pre>";
// echo "<pre>";
// print_r(array_replace($array,$FilterId));
// echo "</pre>";
echo "<br><hr>";

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

if (filter_var($url1,FILTER_VALIDATE_URL)){
  echo "A VALID URL";
}else{
  echo "NOT A VALID URL";
}
echo "<br>";
if (filter_var($url2,FILTER_VALIDATE_URL)){
  echo "A VALID URL";
}else{
  echo "NOT A VALID URL";
}
echo "<br>";
if (filter_var($url3,FILTER_VALIDATE_URL)){
  echo "A VALID URL";
}else{
  echo "NOT A VALID URL";
}
echo "<br>";
if (filter_var($url4,FILTER_VALIDATE_URL)){
  echo "A VALID URL";
}else{
  echo "NOT A VALID URL";
}
echo "<br><hr>";
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo (filter_var($url1,FILTER_SANITIZE_URL));
echo "<br>";
echo (filter_var($url2,FILTER_SANITIZE_URL));
echo "<br>";
echo (filter_var($url3,FILTER_SANITIZE_URL));
echo "<br>";
echo (filter_var($url4,FILTER_SANITIZE_URL));
























