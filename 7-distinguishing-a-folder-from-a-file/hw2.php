<?php 
$dir = __DIR__ .'/test';
$files = array_diff(scandir($dir), ['.','..']);
foreach($files as $file){
    $path = $dir. '/' . $file;
    if(is_dir($path)){
        echo "$file <br>";
    }
}