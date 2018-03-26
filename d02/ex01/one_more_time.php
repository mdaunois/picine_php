#!/usr/bin/php
<?php

function ft_split($str)
{
	$explosion = explode(' ', $str);
	$tab = array_filter($explosion);
	return($tab);
}
$date = ft_split($argv[1]);
preg_match('/Lundi|Mardi|Merdredi|Jeudi|Vendredi|Samedi|Dimanche/', $date[0], $jour);
preg_match('/^([1-9]|[12][0-9]|3[01])$/', $date[1], $num);
preg_match('/Janvier|Fevrier|Mars|Avril|Mai|Juin|Juillet|Aout|Septembre|Octobre|Novembre|Decembre/', $date[2], $mois);
preg_match('/^(19[78][0-9]|199[0-9]|2[0-9]{3}|30[0-9]{2}|3100)$/', $date[3], $annee);
preg_match('/\b(0{1}[0-9]|1[0-9]|2[0-3])\b:\b(0{1}[0-9]|[1-4][0-9]|5[0-9])\b:\b(0{1}[0-9]|[1-4][0-9]|5[0-9])\b/', $date[4], $heures);

if (!$jour[0] || !$mois[0] || !$num[0] || !$annee || !$heures)
{
	echo "Wrong Format\n";
	die();
}
if ($mois[0] == "Janvier")
	$mois[0] = 1;
else if ($mois[0] == "Fevrier")
	$mois[0] = 2;
else if ($mois[0] == "Mars")
	$mois[0] = 3;
else if ($mois[0] == "Avril")
	$mois[0] = 4;
else if ($mois[0] == "Mai")
	$mois[0] = 5;
else if ($mois[0] == "Juin")
	$mois[0] = 6;
else if ($mois[0] == "Juillet")
	$mois[0] = 7;
else if ($mois[0] == "Aout")
	$mois[0] = 8;
else if ($mois[0] == "Septembre")
	$mois[0] = 9;
else if ($mois[0] == "Octobre")
	$mois[0] = 10;
else if ($mois[0] == "Novembre")
	$mois[0] = 11;
else if ($mois[0] == "Decembre")
	$mois[0] = 12;
$heure = substr($heures[0], 0, 2);
$minute = substr($heures[0], 3, 2);
$sec = substr($heures[0], 6, 2);
date_default_timezone_set("Europe/Paris");
$timestamp = mktime($heure, $minute, $sec, $mois[0], $num[0], $annee[0]);
echo $timestamp."\n";

?>