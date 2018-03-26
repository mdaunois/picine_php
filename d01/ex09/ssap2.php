#!/usr/bin/php
<?php
function ft_split($str)
{
	$explosion = explode(' ', $str);
	$tab = array_filter($explosion);
	return($tab);
}
$i = 1;
while ($argv[$i] != NULL)
//foreach (array_slice($argv, 1) as $elem)
{
	$elem = $argv[$i];
	$tab = explode(' ', $elem);
	$tab = array_filter($tab);
	foreach($tab as $elem2)
	{
		if (ctype_alpha($elem2))
			$str = $str." ".$elem2;
		else if(is_numeric($elem2))
			$num = $num." ".$elem2;
		else
			$other = $other." ".$elem2;
	}
	$i++;
}
$result_str = ft_split($str);
$result_num = ft_split($num);
$result_other = ft_split($other);
natcasesort($result_str);
sort($result_num, SORT_STRING);
natcasesort($result_other);
foreach  ($result_str as $elem)
{
	echo $elem."\n";	
}
foreach  ($result_num as $elem)
{
	echo $elem."\n";	
}
foreach  ($result_other as $elem)
{
	echo $elem."\n";	
}
?>

