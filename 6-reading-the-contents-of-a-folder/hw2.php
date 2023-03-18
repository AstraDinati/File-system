<?php
$files = array_diff(scandir(__DIR__ .'/dir'), ['..', '.']); 
foreach($files as $file){
    echo file_get_contents(__DIR__ . "/dir/$file");
}
?>