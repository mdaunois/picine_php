#!/usr/bin/php
<?php
$i = 0;
if ($argc == 2)
{
	$str = explode(' ', $argv[1]);
	$str = array_filter($str);
	foreach($str as $elem)
	{
		if ($i == 0 && $elem != " ")
		{
			echo $elem;
			$i++;
		}
		else if($i !=0 && $elem != " ")	
			echo " ".$elem;
	}
	echo "\n";
}
?>
