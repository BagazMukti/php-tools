<?php
// MD5 Checksum
// Coded by Bagaz [ T1KUS90T ]
// Thanks to my friends
$i=$_SERVER[argv][0];
$file=$_SERVER[argv][1];
print "===================
MD5 Checksum
Usage: php $i <file>
===================\n";
if(file_exists($file)) {
	$md5=md5_file($file);
	print ">> $md5\n";
} else {
	exit();
}
?>