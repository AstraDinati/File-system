<?php
$str = '';
$files = array_diff(scandir(__DIR__ .'/dir'), ['..', '.']); 
foreach($files as $file){
    $str = file_get_contents(__DIR__ . "/dir/$file");
    file_put_contents(__DIR__ . "/dir/$file", $str . '!');
}
?>