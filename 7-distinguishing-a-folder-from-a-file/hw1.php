<?php
	$path = __DIR__ . "/1.txt";
    //$path = __DIR__ . "/1";
if(is_file($path)){
    echo 'путь к файлу';
}   else { echo 'путь к папке';
}