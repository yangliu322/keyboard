<?php
//echo $ID;
$keyboard = $_GET["keyboard"];
$key_array = explode("<br>", $keyboard);
$key_array[0] = "char,start,end,time";
var_dump($key_array);
$fp = fopen('test.csv','w');
foreach ($key_array as $value) {
	$v = explode(",", $value);
	fputcsv($fp,$v);
}
fclose($fp);
?>