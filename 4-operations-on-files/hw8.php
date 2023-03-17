<?php 
if(!file_exists(__DIR__."/message.txt")){
    file_put_contents(__DIR__."/message.txt", '!');
} else {echo file_get_contents(__DIR__."/message.txt");}