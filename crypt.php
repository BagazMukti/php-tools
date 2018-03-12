<?php
function rm_php($code) {
	if(strpos(strtok($code, "\n"), "<?php") !== false) {
		$res = substr($code, strpos($code, "\n")+1);
	} else {
		$res = $code;
	}	
return $res;
}
function str2hex($string) {
	$hex = '';
	for($i=0;$i<strlen($string);$i++) {
		$ord = ord($string[$i]);
		$hexCode = dechex($ord);
		$hex .= "\x".substr('0'.	$hexCode, -2);
		}
		return $hex;
}

// shuffle
$var1 = str_shuffle('bLEeDz');
$var2 = str_shuffle('uNStaBLe');
$var3 = str_shuffle('nOthINg');
$var4 = str_shuffle('fuCkInG');
$var5 = str_shuffle('heLlzNo');
$var6 = str_shuffle('vULcAnO');
$f1 = str_shuffle('aMrIh');
$f2 = str_shuffle('bAgaZ');
$f3 = str_shuffle('mUKti');
$f4 = str_shuffle('mAha');
$f5 = str_shuffle('wIboWo');

if(!$_POST['code']) {
	echo "error: input your code plz...";
	exit;
}

$code = rm_php($_POST['code']);
$e1 = urlencode($code);
$e2 = base64_encode($e1);
$e3 = str_rot13($e2);
$e4 = gzdeflate($e3);
$e5 = str_rot13($e4);
$e6 = gzdeflate($e5);
$res = strrev(base64_encode($e6));

$encc = '$_'.$f1.'=@$O00("onfr64_qrpbqr");$_'.$f2.'=@$O00("heyqrpbqr");$_'.$f3.'=@$O00("fge_ebg13");$_'.$f4.'=@$O00("tmvasyngr");';
$encodee = str_rot13(base64_encode($encc));

$key = 'EVal(@$OO0(@$O00("'.$encodee.'")));
evAL(@$_'.$f2.'(@$_'.$f1.'(@$_'.$f3.'(@$_'.$f4.'(@$_'.$f3.'(@$_'.$f4.'(@$_'.$f1.'(@$'.$var1.'($'.$var4.')))))))));';

$encodedkey = str_rot13(base64_encode($key));

$plain = '$GLOBALS[\'OO0\']="\x62\x61\x73\x65\x36\x34\x5f\x64\x65\x63\x6f\x64\x65";$GLOBALS[\'O00\']="\x73\x74\x72\x5f\x72\x6f\x74\x31\x33";
$'.$var4.'="'.$res.'";
eVAl(@$OO0(@$O00("'.$encodedkey.'")));';

$enc = strrev(base64_encode($plain));

$key2 = str2hex('eval($'.$var3.');');

$result = '<?php
/*
	* bl33dz encryptor v2
	* https://bl33dz.me/encryptor/v2.html
*/
$GLOBALS[\''.$var6.'\']="\x64\x65\x66\x69\x6e\x65";$GLOBALS[\''.$var1.'\']="\x73\x74\x72\x72\x65\x76";$GLOBALS[\''.$var2.'\']="\x62\x61\x73\x65\x36\x34\x5f\x64\x65\x63\x6f\x64\x65";/* \x62\x67\x61\x7a*/
@$'.$var6.'("'.str2hex($var5).'","'.$key2.'");$'.$var3.'=@$'.$var2.'(@$'.$var1.'("'.$enc.'"));eVAL('.$var5.');';

echo $result;