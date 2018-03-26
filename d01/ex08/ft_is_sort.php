#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$tab = array_filter($tab);
	$no_sort = $tab;
	$sorting_tab = sort($tab);
	if ($no_sort == $tab)
		return (1);
	else
		return (0);
}
?>
