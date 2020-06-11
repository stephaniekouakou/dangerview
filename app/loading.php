<?php

function Loading($path)
{
	$dossier = dir($path);
	$vue =[];

	while($file = $dossier->read())
	{
		$file = str_replace(".php", "", $file);
		array_push($vue, $file);

	}

	array_shift($vue);array_shift($vue);

	return $vue;
}
