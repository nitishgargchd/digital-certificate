<?php

$data = $_POST["data"];
$userpvtfile = $_POST["userpvtfile"];
//$usercertfile = $_POST["usercertfile"];
$pass = $_POST["pass"];

$pkeyid = array(file_get_contents($userpvtfile),$pass);

openssl_sign($data,$signature,$pkeyid);

var_dump(base64_encode($signature));
/*
$pubkeyid = file_get_contents($usercertfile);

$ok= openssl_verify($data,$signature,$pubkeyid);

echo "<br>";

var_dump($ok);
*/

?>