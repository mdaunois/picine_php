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

function do_op($str)
{
	$i = 0;
	$j = 0;
	$op = "£";
	while($str[$i])
	{
		if ($j == 0)
			$nb1 = $nb1.$str[$i++];
		if ($str[$i] == "+" or $str[$i] == "-" or $str[$i] == "*" or $str[$i] == "/" or $str[$i] == "%")
		{
			$op = $str[$i++];
			$j++;
		}
		if ($j == 1)
			$nb2 = $nb2.$str[$i++];
	}
	if (!is_numeric(trim($nb1)))
		echo "Syntax Error\n";
	else if (!is_numeric(trim($nb2)))
		echo "Syntax Error\n";
	else if ($op == "£")
		echo "Syntax Error\n";
	else
	{
		if ($op == "+")
			echo add($nb1, $nb2)."\n";	
		if ($op == "-")
			echo sus($nb1, $nb2)."\n";	
		if ($op == "*")
			echo mult($nb1, $nb2)."\n";	
		if ($op == "/")
			echo div($nb1, $nb2)."\n";	
		if ($op == "%")
			echo mod($nb1, $nb2)."\n";
	}
}

if ($argc =! 2)
	echo "Incorrect Parameters\n";
else
	do_op($argv[1]);

?>
