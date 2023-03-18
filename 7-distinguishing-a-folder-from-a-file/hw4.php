<?php 
$dir = __DIR__ .'/test';
$files = array_diff(scandir($dir), ['.','..']);
foreach($files as $file){
    $path = $dir. '/' . $file;
    if(is_file($path)){
        file_put_contents($path, time());
        echo file_get_contents($path) .' '. "$file <br>";
    }
}