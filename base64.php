<?php
// Base64 Encode/Decode
// Coded by Bagaz [ T1KUS90T ]
// Thanks to my friends
print "===================
Base64 Encode/Decode
===================
1. Encode
2. Decode
>> ";
$menu = fgets(STDIN);
if($menu == 1) {
	print "= Encode =
>> ";
	$anu = fgets(STDIN);
	print ">> ".base64_encode($anu)."\n";
} elseif($menu == 2) {
	print "= Decode =
>> ";
	$anu = fgets(STDIN);
	print ">> ".base64_decode($anu)."\n";
} else {
	print "T1KUS90T [ http://www.facebook.com/T1KUS90T ]\n";
}
?>