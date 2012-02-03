<?php

// 	Skript failide jagamiseks enam-vähem võrdse suurusega 25 kausta
//	kaustad 1 ... 25 peavad olema eelnevalt loodud
//	probleeme esineb sulgude ja ülakomadega (failinimedes)
//	ette nähtud käivitamiseks *nix käsurealt "php move.php".
//	jagatavate failide asukoht: PWD/$dir
//	kaustad 1..25 peavad samuti asuma PWD's

//	Released under GNU GPL by creator Rait Tammik (irxuke@gmail.com) on 02.02.2012

$dir = 'jagada';
$files = scandir ($dir);
$i = 1;

foreach  ($files as $file) {
	$cmd = 'mv \'' . $dir . '/' . $file . '\' ' . $i . '/';
	echo $cmd . PHP_EOL;
	exec ($cmd);
	if ($i < 25)  $i++;
	else $i = 1;
}

?>
