<?php
for($i=1;$i<=5;++$i){
	copy(__DIR__ .'/original.txt', __DIR__ . "/copy/copy$i.txt");
}
?>