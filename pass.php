<?php
error_reporting(base64_decode('MA=='));
function banner() {
	$red = "\033[31m";
	$normal = "\033[0m";
	return $red."#############################
##  Password Generator v1  ##
##  Author: Bagaz Mukti W  ##
".$normal."##  github.com/BagazMukti/ ##
##         <3 CR           ##
#############################
// Cek history: php ".$_SERVER[argv][0]." --history
// Clear history: php ".$_SERVER[argv][0]." --clear-history

";
}
function generatestr($length) {
	$keys = array_merge(range('a', 'z'));
	$str = '';
	for($i=0;$i < $length;$i++) {
		$str .= $keys[mt_rand(0, count($keys) - 1)];
	}
	return $str;
}
function generatenum($length) {
	$number = '';
	for($i = 0;$i < $length;$i++) {
		$number .= mt_rand(0, 9);
		}
		return $number;
}
function generatechars() {
	$keys = '@\#%&*-+()!"\':;/?$^_[]\\<>';
	$chars = str_shuffle($keys);
	return $chars;
}
print banner();
$arg = $_SERVER[argv][1];
if($arg == "--history") {
	$history = file_get_contents('_history_');
	if(!file_exists('_history_')) {
		print "History:\nEmpty...\n";
	} elseif(!is_writeable('_history_') && (!is_readable('_history_'))) {
		print "History:\nFile \"_history_\" not writeable or not readable...\n";
	} else {
		print "History:\n$history\n";
	}
} elseif($arg == '--clear-history') {
	touch('_history_');
	if(unlink('_history_')) {
		print "History cleared...\n";
	} else {
		print "Cannot clear history...\nTry command \"chmod +w _history_\"...\n";
	}
} else {
print "Input length: ";
$length = fgets(STDIN);
$length2 = $length / 2 + 3;
$string = generatestr($length2);
$numbers = generatenum($length2);
$characters = generatechars();
$strnumchar = str_shuffle($string.$numbers.$characters);
$result = substr($strnumchar, 0, $length);
print "With Hash ?\n1. MD5\n2. SHA1\n3. No\nChoose one: ";
$menu = fgets(STDIN);
if($menu == 1) {
	$md5 = md5($result);
	print "Result: $result\nMD5: $md5\n";
	$x = fopen('_history_', 'a');
	fwrite($x, "---------------------------
Result: $result
MD5: $md5
---------------------------
");
	fclose($x);
} elseif($menu == 2) {
	$sha1 = sha1($result);
	print "Result: $result\nSHA1: $sha1\n";
	$x = fopen('_history_', 'a');
	fwrite($x, "---------------------------
Result: $result
SHA1: $sha1
---------------------------
");
	fclose($x);
} elseif($menu == 3) {
	print "Result: $result\nLength: ".strlen($result)."\n";	
	$x = fopen('_history_', 'a');
	fwrite($x, "---------------------------
Result: $result
Length: ".strlen($result)."
---------------------------
");
	fclose($x);
} else {
	print "Error: Please choose one...\n";
	print "Exiting...\n";
	sleep(2);
}
}
// fb.com/bacotgoblok //
?>