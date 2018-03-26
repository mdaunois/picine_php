#!/usr/bin/php
<?php
echo "Entrez un nombre : "; 
while($line = (fgets(STDIN)))
{
	$nb = trim($line, "\n" );
	if(is_numeric($nb))
	{
		if($nb % 2 == 0) 
			echo "Le chiffre ".$nb." est Pair\n";
		else
			echo "Le chiffre ".$nb." est Impair\n";
	}
	else
	{
	//	if ($line == "\n")
	//		echo "'' n'est pas un chiffre\n";
	//	else
			echo "'".$nb."' n'est pas un chiffre\n";
	}
	echo "Entrez un nombre : "; 
}
echo "^D\n"
?>
