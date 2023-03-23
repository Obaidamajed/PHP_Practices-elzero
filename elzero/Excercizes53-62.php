<?php
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";
// echo str_replace([$str[$num_two], $str[$num_one]], [$let_two, $let_one], $str);
echo str_replace([$str[2], $str[$num_one]], [$let_two, $let_one], $str);


echo "<br>--------------------------<br>";
$str = "Orezle";
// echo str_replace(strrev($str)[-1],"o", strrev($str));
echo "<br>";
// $new = str_replace(strrev($str)[-1],"o", strrev($str));
// echo substr_replace($new, "E", 0, 1);
echo substr_replace(str_replace(strrev($str)[-1],"o", strrev($str)), "E", 0, 1);

// echo substr_replace(string, what i put in the index 0("E"),which index i want replace (0),how many index i want replace from index 0 (1));
// echo strrev($str)[0];
// Elzero

// substr_replace & str_replace 
// الفرق بيناتهم إنو الاول بقدر أحدد إندكس واحد فقط لأغيرو 
// أما الثاني اذا حددت إندكس معين وكان هذا الإندكس مكرر أكثر من مرة حيستبدلهم كلهم
echo "<br>--------------------------<br>";
$str = 'aAa';
$num = 3;
$char = "_";
// echo str_replace("A", "a", $str); // aaa
echo "<br>";
echo str_repeat(substr_replace(str_replace("A", "a", $str),$char,$num), 3) ;
// Write Your Code Here

// aaa_aaa_aaa_
echo "<br>--------------------------<br>";
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str, "<b>");
// <b>Elzero</b>
echo "<br>--------------------------<br>";
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
echo substr_count($str,$e,4 );
echo "<br>";
echo substr_count($str,$e);
echo "<br>--------------------------<br>";
$chars = ["E", "l", "z", "e", "r", "o"];

echo implode($chars);
// echo "<br>";
// echo implode(" ",$chars);
echo "<br>--------------------------<br>";
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
// echo implode($chars); //E12lzERo
// echo substr_replace(implode($chars), "", 1,2) ; // ElzERo
// من الاندكس رقم واحد عدلي اندكسين واستبدلهم ب  ولا اشي 
echo substr_replace(substr_replace(implode($chars), "", 1,2), "er",3,2);








