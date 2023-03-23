<?php $username= "Elzero Courses"?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo $username?>>
    <title>Welcome To <?php echo $username ?></title>
  </head>
  <body>
    <h1>1</h1>
    <h2><?php echo $username ?></h2>
    <p>Here In <?php echo $username ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $username ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $username ?></footer>
    <hr>
  </body>
</html>

<?php echo "<h2>2</h2>";
$name = "elzero";
$$name = "Web";
echo $$name;
echo "<br>";
echo $elzero;
echo "<br>";
echo "${$name}";
echo "<br>";

$a = "elzero";
$b = &$a;
$b = "Web";
$name = $a;
$$name = $b;
echo $a;
echo "<br>";
echo $b;
echo "<br><hr>";
echo "<h2>3</h2>";
$a = 200;
$b = $a;
$a = 100;

echo $b; // 100

echo "<br><hr>";
echo "<h2>4</h2>";
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
// echo "<br>";
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["SystemRoot"];
echo "<br>";
echo $_SERVER["OPENSSL_CONF"];
echo "<br><hr>";
echo "<h2>5</h2>";
/*
php reserved keywords:
1-break 2-clone 3-die() 4-die() 5-endswitch 6-final 7-function 8-include
9-isset() 10-or 11-readonly 12-switch 13-use 14-yield from 15-abstract
*/
echo "<br><hr>";
echo "<h2>6</h2>";
echo __LINE__;
echo "<br>";
echo __file__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __dir__;
echo "<br>";
echo __DIR__;





















