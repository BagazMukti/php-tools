<?php
// Hash Generator
// Coded by Bagaz [ T1KUS90T ]
// Thanks to my friends
print "============================\n# Hash Generator\n# Bagaz [ T1KUS90T ] \n============================\n1. MD2\n2. MD4\n3. MD5\n4. SHA1\n5. SHA224\n6. SHA256\n7. SHA384\n8. SHA512\n>> ";
$menu = fgets(STDIN);
if($menu == 1) {
	print "= MD2 =\n>> ";
	$string = fgets(STDIN);
	print ">> ".hash('md2', $string)."\n";
} elseif($menu == 2) {
	print "= MD4 =\n>> ";
	$string = fgets(STDIN);
	print ">> ".hash('md4', $string)."\n";
} elseif($menu == 3) {
	print "= MD5 =\n>> ";
	$string = fgets(STDIN);
	print ">> ".hash('md5', $string)."\n";
} elseif($menu == 4) {
	print "= SHA1 =\n>> ";
	$string = fgets(STDIN);
	print ">> ".hash('sha1', $string)."\n";
} elseif($menu == 5) {
	print "= SHA224 =\n>> ";
	$string = fgets(STDIN);
	print ">> ".hash('sha224', $string)."\n";
} elseif($menu == 6) {
	print "= SHA256 =\n>> ";
	$string = fgets(STDIN);
	print ">> ".hash('sha256', $string)."\n";
} elseif($menu == 7) {
	print "= SHA384 =\n>> ";
	$string = fgets(STDIN);
	print ">> ".hash('sha384', $string)."\n";
} elseif($menu == 8) {
	print "= SHA512 =\n>> ";
	$string = fgets(STDIN);
	print ">> ".hash('sha512', $string)."\n";
} else {
	print "T1KUS90T [ http://www.facebook.com/T1KUS90T ]\n";
}
?>