#!/usr/bin/php
<?php
function ft_strtoupper_title($m)
{
	$t = strstr($m, ">", true);
	$t = strtoupper($t);
	$t = $t . strstr($m, ">");
	return($t);
}
function ft_struper($m)
{
	$t = strstr($m, ">");
	$t = strtoupper($t);
	$e = strstr($m, ">", true) . $t;
	return ($e);
}
if ($argc > 1)
{
	$file = file_get_contents($argv[1]);
	$content = explode('title', $file);
	$len = count($content) - 1;
	$cpt = -1;
	while (++$cpt <= $len)
		if (preg_match("/\s*=/", $content[$cpt]) >= 1)
				$content[$cpt] = ft_strtoupper_title($content[$cpt]);
	$test = implode('title', $content);
	$content = explode('<', $test);
	$len = count($content);
	$cpt = -1;
	while (++$cpt != $len) 
		if (preg_match("/http/", $content[$cpt]) >= 1)
			$content[$cpt] = ft_struper($content[$cpt]);
	$str = implode('<', $content);
	echo $str;
}
?>
