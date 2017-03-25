<?php
$input = $_SERVER[argv][1];
$output = $_SERVER[argv][2];
$rand = rand(24,308);
$randchar = random('CiNta');
$bagaz = 'CiNta';
$randomCaLon = random('sHiNta');
$rand0m = random('raHMa');
$dev = random('devi');
function rmvphp($code) {
  if(strpos(strtok($code, "\n"), "<?php") !== false) {
  $nude = substr($code, strpos($code, "\n")+1);
  } else {
  $nude = $code;
  }
return $nude;
}
function help() {
	$name = $_SERVER[argv][0];
	$help = "\n,-----.                                 
|  |) /_  ,--,--. ,---.  ,--,--. ,---.  
|  .-.  \' ,-.  || .-. |' ,-.  |(  .-'  
|  '--' /\ '-'  |' '-' '\ '-'  |.-'  `) 
`------'  `--`--'.`-  /  `--`--'`----'  
                 `---'                  
AsunaEncryptor v2
Coded by Bagaz [ T1KUS90T ]
fb.com/bacotgoblok

Usage: php ".$name." <input> <output>

Special Thanks : My Friends and You\n\n";
echo $help;
}
function random($string) {
	$strlen = strlen($string);
	$temp = "";
	for ($i = 0; $i < $strlen; $i++) {
		$random = mt_rand(0, $strlen - 1);
		$temp .= $string[$random];
	}
	return $temp;
}
if(!$input || !$output) {
	help();
}
elseif(!file_exists($input)) {
	help();
	print "Error: input file doesn't exists\n\n";
} else {
	$file = fread(fopen($input,'r'),filesize($input));
	$code = rmvphp($file);
	$s1 = array('a','i','u','e','o','1','2','3','4','5');
	$s2 = array('¥@','¥^','¥%','¥&','¥*','¥-','¥+','¥(','¥)','¥!');
	$encrypt = str_replace($s1,$s2,$code);
	$z = rawurlencode($encrypt);
 	$a = base64_encode($z);
	$b = str_rot13($a);
 	$c = gzdeflate($b, 8);
	$d = str_rot13($c);
	$e = gzdeflate($d, 9);
	$encrypt2 = base64_encode($e);
	$anuitu = "$".$bagaz."='".$encrypt2."';$".$randchar.$rand."='JHo9YmFzZTY0X2RlY29kZSgkQ2lOdGEpOyRhPWd6aW5mbGF0ZSgkeik7JGI9c3RyX3JvdDEzKCRhKTskYz1nemluZmxhdGUoJGIpOyRkPXN0cl9yb3QxMygkYyk7JGU9YmFzZTY0X2RlY29kZSgkZCk7JGY9cmF3dXJsZGVjb2RlKCRlKTskdHJvamFuPWFycmF5KCfCpUAnLCfCpV4nLCfCpSUnLCfCpSYnLCfCpSonLCfCpS0nLCfCpSsnLCfCpSgnLCfCpSknLCfCpSEnKTskY29kZXI9YXJyYXkoJ2EnLCdpJywndScsJ2UnLCdvJywnMScsJzInLCczJywnNCcsJzUnKTskZXY0bD1zdHJfcmVwbGFjZSgkdHJvamFuLCRjb2RlciwkZik7ZXZBTCgkZXY0bCk7';EvaL(base64_decode($".$randchar.$rand."));";
	$inianu = base64_encode(convert_uuencode(urlencode($anuitu)));
	$key = '$GLOBALS[\''.$dev.'\']=\'bas\'.\'e64\'.\'_de\'.\'cod\'.\'e\';$On3NC=@$'.$dev.'(\'dXJsZGVjb2Rl\');$tW03NC=@$'.$dev.'(\'YmFzZTY0X2RlY29kZQ==\');$tHr33NC=@$'.$dev.'(\'Y29udmVydF91dWRlY29kZQ==\');$r35=@$On3NC(@$tHr33NC(@$tW03NC($'.$randomCaLon.')));EvaL($r35);';
	$key2 = base64_encode($key);
	$result = "<?php
/* Crypted by AsunaEncryptor V2 */
$".$randomCaLon."='".$inianu."';$".$rand0m."='".$key2."';eVAl(base64_decode($".$rand0m."));?>";
	$length = strlen($code);
	$length2 = strlen($result);
	$fp = fopen($output, 'w');
	fwrite($fp, $result);
	fclose($fp);
	$filesize = round(filesize($input)/1024,2);
	$filesize2 = round(filesize($output)/1024,2);
	print "\n<============================>
++ Input Info ++
Filename: ".$input."
Filesize: ".$filesize." KB
Length: ".$length."
<============================>\n
Result: ".$result."\n
<============================>
++ Output Info ++
Filename: ".$output."
Filesize: ".$filesize2." KB
Length: ".$length2."
<============================>\n\n";
}
exit;
?>