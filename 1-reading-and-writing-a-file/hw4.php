<?php 
$num = file_get_contents(__DIR__ . "/count.txt");
file_put_contents(__DIR__ . "/count.txt", $num + 1);
echo $num;