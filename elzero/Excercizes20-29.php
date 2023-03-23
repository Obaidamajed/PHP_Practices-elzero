<?php 
echo "<h2>1</h2>";
echo "<hr>";
// echo (10 * 20 * 15 * (3  * 190) * 10) % 400;

echo "<h2>2</h2>";
echo "<hr>";

$a = "10";

echo +$a;
echo "<br>";
echo gettype(+$a) ;
echo "<br>";
echo (int) $a;
echo "<br>";
echo gettype((int) $a) ;
echo "<br>";
echo (integer) $a;
echo "<br>";
echo gettype((integer) $a) ;
echo "<h2>3</h2>";
echo "<hr>";
$a = 10;
$b = 20;
$c=  $b / $a;
// echo $c; // 2
echo "<br>";
echo $c -= 3;
echo "<h2>4</h2>";
echo "<hr>";
$a = 10;
$b = 20;
$c = 15;

var_dump($a != $b); // True;
echo "<br>";
var_dump($c !== $a); // True
echo "<br>";
var_dump($a <> $b); // True
echo "<br>";
var_dump($a < $b); // True
echo "<br>";
var_dump($a < $c); // True
echo "<br>";
var_dump($a <= $c); // True
echo "<br>";
var_dump(gettype($a) === gettype($b)); // True
echo "<br>";
var_dump(gettype($a) == gettype($b)); // True
echo "<br>";
var_dump(gettype((float) $a) != gettype($b)); // True
// echo "<br>";
// var_dump($a);
// echo "<br>";
// var_dump(gettype($a));
// echo "<br>";
// echo gettype($a);

echo "<h2>5</h2>";
echo "<hr>";
$points = 10;

// Write Your Code Here
$points++;
$points++;
$points++;

echo $points; // 13
echo "<br>";

// Write Your Code Here
$points--;
$points--;
$points--;
$points--;
$points--;

echo $points; // 8;
echo "<h2>6</h2>";
echo "<hr>";
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a  $b  $c" ;

// Method Two
$d = "{$a}  {$b}  {$c}";

// Method Three
$d = $a . " " . $b . " " . $c;


// Method Four
$d = $a ;
$d .= " " ;
$d .= $b ;
$d .= " " ;
$d .= $c;

echo $d; // Elzero Web School
echo "<h2>7</h2>";
echo "<hr>";
$a = 10;
$b = 20;

echo $a + $b * $a + $b + $a * $a * $a; // 10,000


echo "<h2>8</h2>";
echo "<hr>";
// Code 1
$z = @$v or die("Custom Error");
echo $z;
// Code 2
$f = @file("Not_A_File") or die("Custom Error");
echo $f;

// Code 3
(@include("Not_A_File")) or die("Custom Error");








