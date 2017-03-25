<?php
function string_hex($string){
	$hex = "";
	for($i=0; $i<strlen($string); $i++){
 		$ord = ord($string[$i]);
		$decimal = dechex($ord);
		$hex .= substr('0'.$decimal, -2);
  }
	return $hex;
}
function hex_string($hex){
	$string="";
	for ($i=0; $i < strlen($hex)-1; $i+=2){
		$string .= chr(hexdec($hex[$i].$hex[$i+1]));
	}
	return $string;
}
print "===========================\n# Hex2String and String2Hex\n# Bagaz [ T1KUS90T ] \n============================\n1. Hex2String\n2. String2Hex\n>> ";
$menu = fgets(STDIN);
if($menu == 1) {
	print "= Hex2String =\n>> ";
	$hex = fgets(STDIN);
	print ">> ".hex_string($hex)."\n";
} elseif($menu == 2) {
	print "= String2Hex =\n>> ";
	$string = fgets(STDIN);
	print ">> ".string_hex($string)."\n";
} else {
	print "T1KUS90T [ http://www.facebook.com/T1KUS90T ]\n";
}
?>