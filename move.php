<?php

/*
script to divide files to folders (round-robin)
original purpose: to divide several thousand mp3's to manageable chunks

CONFIGURATION:
$source_dir - files are taken from there
$dir_count - number of directories to divide between (directories must be created in advance)

some filenames (brackets and other special marks) won't be parsed correctly and will not be moved
(will be printed out as errors)

written to be run under *nix CLI

Released under GNU GPL by creator Rait Tammik (irxuke@gmail.com) on 02.02.2012
*/

$source_dir = 'jagada';
$dir_count = 25;
$files = scandir ($source_dir);
$i = 1;

foreach  ($files as $file) {
	$cmd = 'mv \'' . $source_dir . '/' . $file . '\' ' . $i . '/';
	echo $cmd . PHP_EOL;
	exec ($cmd);
	if ($i < $dir_count)  $i++;
	else $i = 1;
}

?>
