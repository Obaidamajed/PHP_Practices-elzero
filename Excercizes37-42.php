<?php

echo "<h2>1</h2>";//------------------
$index = 10;

while($index >=1){
  echo "$index<br>";
  $index--;
}
echo "<hr>";
echo "<h2>2</h2>";//------------------

$index = 0;

while($index<=20){
  echo "$index<br>";
  $index +=2;
}

echo "<hr>";

$i=0;
do{
  echo "$i<br>";
  $i +=2;
  
}while($i<=20);

echo "<hr>";

for ($i=0; $i<=20; $i+=2){
  echo "$i<br>";
}
echo "<hr>";
echo "<h2>3</h2>";//------------------
$num = 2;
while ($num < 520) {
  echo --$num;
  break;
}
echo "<hr>";
echo "<h2>4</h2>";//------------------
$start = 10;
$end = 0;
$stop = 3;
for ($start=10; $start >= $stop; $start--){
  if ($start == 10){
    echo $start . "<br>";
  }
  else{
    echo $end . $start . "<br>";
  }
}
echo "<hr>";
echo "<h2>5</h2>";//------------------
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

// method 1
// foreach($mix as $number){
  //   if(gettype($number) == "integer"){
    //     echo $number . "<br>";
    //   }
    // }
    
    // method 2
    for ($start=0; $start<7; $start++){
      if(gettype($mix[$start])=="integer"){
        echo $mix[$start] . "<br>";
      }
    }
echo "<hr>";
echo "<h2>6</h2>";//------------------
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach($money as $name => $salary){
  echo "The Name Is $name And I Need $salary Pound From Him <br>";
}
echo "<hr>";
echo "<h2>7</h2>";//------------------
$mix = [1, 2, "A", "B", "C", 3, 4];
$i=0;
for($i=0; $i<7; $i++){
  if (gettype($mix[$i])=="integer"){
    echo $mix[$i] . "<br>";
  }
  
  // echo "<hr>";
  // foreach($mix as $char){
    //   if (gettype($char) == "integer"){
      //     echo $char . "<br>";
      //   }
      //   else {
        //     echo $char . " <br> ";
        //   }
        // }
        // وقفت هون , ما كملت حل
      }
echo "<hr>";
echo "<h2>8</h2>";//------------------
$nums = [1, 13, 12, 20, 51, 17, 30];

for($i=0; $i<7; $i++){
  if ($nums[$i] % 2 == 0){
    echo $nums[$i] / 2 . "<br>";
  }
}


























