<?php
$arr = range(1,3);
foreach($arr as $elem){
	unlink(__DIR__ ."/$elem.txt");
}