<?php
$files = array_diff(scandir(__DIR__ .'/dir'), ['..', '.']); 
foreach($files as $file){
    echo "$file <br>";
}
?>