#!/usr/bin/php
<?php
if ($argc > 1)
{
	$str = explode(" ", $argv[1]);
	$tab = array_filter($str);
	foreach (array_slice($tab, 1) as $elem)
	{
		echo $elem." ";	
	}
	echo $tab[0]."\n";
}
?>
