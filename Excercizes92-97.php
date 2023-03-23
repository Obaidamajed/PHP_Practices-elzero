<?php
date_default_timezone_set("Asia/Amman");
echo date_default_timezone_get() . "<br>" ;
$d = date_create();
echo date ( "D, d M y - h:i:s A") . "<br>";
echo date_format($d, "l, d F Y - h:i:s A");

echo "<br><hr>";

$date = "2005-10-02";
date_default_timezone_set("Asia/Amman") ;
echo date_default_timezone_get(). "<br>";
$d = date_create($date);
// echo date_format($d, "Y, F, l 'dS' H:i:s " );
date_modify($d, "+15hours +15minutes +15seconds");
echo date_format($d, "Y, F, l 'dS' H:i:s " );

echo "<br><hr>";

date_default_timezone_set("Asia/Amman") ;
echo date_default_timezone_get(). "<br>";
// $date = "1990-10-01";
$date = date_create("1990-10-01");
$now = date_create("now");
$diff = date_diff($date,$now);
echo "<pre>";
print_r($diff);
echo "</pre>";
// $d=date_create($date);

echo "From Epoch Time Till " .  date_format($date,"Y-m-d") . " Is Approximately " . $diff->d + $diff->m *30 + $diff->y * 365 . " Days";
echo "<br>";
echo "From Epoch Time Till " . date_format($date,"Y-m-d") . " Is Approximately " . $diff->y . " Years";

echo "<br><hr>";

echo time() . "<br>";

$date = date_create("1970-1-01");
$now  =  date_create("now");
$diff = date_diff($date,$now);

echo (($diff->s) + ($diff->i * 60) + ($diff->h * 60 * 60) + ($diff->d * 24 * 60 *60) + ($diff->m * 30 * 24 * 60 * 60) + ($diff->y * 12 * 30 * 24 * 60 * 60));










