<?php
$arr = [1,2,3];
mkdir(__DIR__ .'/test');
foreach($arr as $elem){
	file_put_contents(__DIR__ ."/test/$elem.txt", "file № $elem");
}
?>