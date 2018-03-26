#!/usr/bin/php
<?php
$file = $argv[1];
$fd = fopen($file, "r") or die("no file");
$content = fread($fd, filesize($file));
print_r($content);

preg_match_all('/<a/', $content, $to_up);

print_r($to_up);
?>