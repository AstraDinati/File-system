<?php 
$num = file_get_contents('hw3.txt');
file_put_contents('hw3.txt', $num**2);