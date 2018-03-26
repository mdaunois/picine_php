#!/usr/bin/php
<?php
function ft_split($str)
{
	$explosion = explode(' ', $str);
	$tab = array_filter($explosion);
	sort($tab);
	return($tab);
}
?>
