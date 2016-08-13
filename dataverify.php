<?php

/*$data=" Sample Data Verification";
$pkeyid = array(file_get_contents('./userprivkey.pem'),"mypassword");

openssl_sign($data,$signature,$pkeyid);

var_dump($signature);
*/

$data = $_POST["data"];
$usercertfile = $_POST["usercertfile"];
$sign = $_POST["sign"];
$sign = base64_decode($sign);

$pubkeyid = file_get_contents($usercertfile);

$ok= openssl_verify($data,$sign,$pubkeyid);

echo "<br>";

var_dump($ok);


?>