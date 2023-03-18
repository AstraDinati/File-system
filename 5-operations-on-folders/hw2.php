<?php
$arr = ['a','b','c'];
foreach($arr as $elem){
	mkdir(__DIR__ ."/$elem");
}
?>