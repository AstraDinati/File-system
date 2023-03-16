<?php 
$num = file_get_contents(__DIR__ . "/hw3.txt");
file_put_contents(__DIR__ . "/hw3.txt", $num**2);