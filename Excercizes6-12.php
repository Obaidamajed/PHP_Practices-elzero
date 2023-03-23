<?php
echo "<h3>1</h3>";
echo (int)15.2 + (int)14.7 + (10.5 + 10.5) . "<br>"; // 50
echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer
echo "<hr>";

echo "<h3>2</h3>";

echo gettype(100) . "<br>";
echo var_dump(100) ;

// Method One
// Method Two
// Method Three => Optional
echo "<hr>";

echo "<h3>3</h3>";
echo "Hello \"Elzero\" \\ \"\"\" We Love \"$\$PHP\"";

// Needed Output
echo "<hr>";

echo "<h3>4</h3>";
echo nl2br("We \n Love \n Elzero \n Web \n School") ;

// Needed Output
echo "<hr>";

echo "<h3>5</h3>";
// Needed Output
 echo <<< 'paragraph'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
paragraph;

echo "<br>";
echo nl2br("Hello \"'Elzero'\"
We Love \"$\"Programming$\"
Languages Specially \"PHP\"");

echo "<hr>";

echo "<h3>6</h3>";
$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming
echo "<hr>";

echo "<h3>7</h3>";

echo "Hello PHP";
echo '<br>';
echo "Hello PHP";

// Needed Output
// 1
// integer
echo "<hr>";

echo "<h3>8</h3>";
echo "<pre>";
print_r([ 'FrontEnd' => [0 =>"HTML", 1 => "CSS", "JS" => ["Vuejs" => [2 => 'v2', 3 => 'v3'],0 => 'Reactjs', 1 => 'Svelte' ]],
          "BackEnd" => [0 => "PHP", 1 => "MySQL", 2 => "Security"],
          0 =>"Git",
          1 => "Hithub",
          "Testing" => [0 => "Unit Testing", 1 => "End To End", 2 => "Integration"] ]);
echo "</pre>";
