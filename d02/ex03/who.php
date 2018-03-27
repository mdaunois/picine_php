#!/usr/bin/php
<?php
date_default_timezone_set('Europe/paris');
$usr = get_current_user();
$file = file_get_contents("/var/run/utmpx");
$sub = substr($file, 1256);
$tab = array();
$format = 'a256user/a4id/a32line/ipid/itype/I2time';
while ($sub != NULL) {
	$info = unpack($format, $sub);
	if (strcmp(trim($info[user]), $usr) == 0 && $info[type] == 7)
	{
		$date = date("M j H:i", $info["time1"]);
		if ($date[5] == ' ')
		{
			$deb = substr($date, 0, 3)."  ".substr($date,4);
			$date = $deb;
		}
		$line = trim($info[line]);
		$line = $line ."  ";
		$usrr = trim($info[user]);
		$usrr = $usrr ." ";
		$str = array($usrr.$line.$date);
		$tab = array_merge($tab, $str);
	}
	$sub = substr($sub, 628);		
}
sort($tab);
foreach ($tab as $elem)
{
	echo $elem;
	echo "\n";
}
?>
