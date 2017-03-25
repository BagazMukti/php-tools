<?php
// Image Base64 Encoder
// Coded by Bagaz [ T1KUS90T ]
// Thanks to my friends
$file=$_SERVER[argv][0];
$input=$_SERVER[argv][1];
function base64_gambar($input) {
	$info=pathinfo($input);
	$ext=$info['extension'];
	$anu=file_get_contents($input);
	$base64=base64_encode($anu);
	$res='data:image/'.$ext.';base64,'.$base64;
	return $res;
}
function simpan($input,$hasil) {
	$info=pathinfo($input);
	$ext=$info['extension'];
	$trim=trim($input,$ext);
	$name=$trim.'txt';
	$save=file_put_contents($name,$hasil);
	return $save;
}
if($input==true) {
$result=base64_gambar($input);
if(simpan($input,$result)) {
echo "Encoding...\n";
echo "Saving...\n";
echo "Success...\n";
} else {
echo "Encoding...\n";
echo "Saving...\n";
echo "Failed...\n";
}
} else {
echo ",-----.                                 
|  |) /_  ,--,--. ,---.  ,--,--. ,---.  
|  .-.  \' ,-.  || .-. |' ,-.  |(  .-'  
|  '--' /\ '-'  |' '-' '\ '-'  |.-'  `) 
`------'  `--`--'.`-  /  `--`--'`----'  
                 `---'                  
Image Base64 Encoder v1
Coded by Bagaz [ T1KUS90T ]
fb.com/bacotgoblok

Usage: php ".$file." <input>

Special Thanks: My Friends and You\n";
}
?>