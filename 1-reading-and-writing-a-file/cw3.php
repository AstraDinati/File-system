<?php
$text = file_get_contents('test.txt');
file_put_contents('test.txt', $text . '!');