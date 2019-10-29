<?php
$arr = [];
const LENGTH = 50000;
for($i=0;$i<LENGTH;$i++){
	$arr[$i] = "test$i";
}

$start = microtime(true);
foreach($arr as $value){
	$temp = $value;
}
echo "Время выполнения алгоритма ".round(microtime(true) - $start,2)."<hr>";
echo "Памяти на скрипт было выделено ".memory_get_usage();