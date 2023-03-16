<?php 
$arr = [3,4,5];
$str = '';
for($i=3;$i<6;++$i){
    $str .= file_get_contents(__DIR__ . "/$i.txt");
}
file_put_contents(__DIR__ . "/new.txt", $str);