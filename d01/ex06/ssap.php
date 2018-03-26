#!/usr/bin/php
<?php
function ft_split($str)
{
	$explosion = explode(' ', $str);
	$tab = array_filter($explosion);
	sort($tab);
	return($tab);
}

foreach (array_slice($argv, 1) as $elem)
{
	$tab = explode(' ', $elem);
	$tab = array_filter($tab);
	foreach($tab as $elem2)
	{
		$str = $str." ".$elem2;
	}
}
$result = ft_split($str);
foreach  ($result as $elem)
{
	echo $elem."\n";	
}
?>
