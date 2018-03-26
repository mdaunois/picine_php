#!/usr/bin/php
<?php

function add($nb1, $nb2)
{
	return ($nb1 + $nb2);
}

function sus($nb1, $nb2)
{
	return ($nb1 - $nb2);
}

function div($nb1, $nb2)
{
	return ($nb1 / $nb2);
}

function mult($nb1, $nb2)
{
	return ($nb1 * $nb2);
}

function mod($nb1, $nb2)
{
	return ($nb1 % $nb2);
}

if ($argc != 4)
	echo "Incorrect Parameters\n";
else
{
	if (trim($argv[2]) == "+")
		echo add($argv[1], $argv[3])."\n";
	else if (trim($argv[2]) == "-")
		echo sus($argv[1], $argv[3])."\n";
	else if (trim($argv[2]) == "/")
		echo div($argv[1], $argv[3])."\n";
	else if (trim($argv[2]) == "*")
		echo mult($argv[1], $argv[3])."\n";
	else if (trim($argv[2]) == "%")
		echo mod($argv[1], $argv[3])."\n";
}
?>
