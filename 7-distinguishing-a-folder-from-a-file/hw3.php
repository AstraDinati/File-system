<?php 
$dir = __DIR__ .'/test';
$files = array_diff(scandir($dir), ['.','..']);
foreach($files as $file){
    $path = $dir. '/' . $file;
    if(is_file($path)){
        echo "$file <br>";
    }
}