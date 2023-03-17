<?php 
if(!file_exists(__DIR__."/file.txt")){
    file_put_contents(__DIR__."/file.txt", '!');
}