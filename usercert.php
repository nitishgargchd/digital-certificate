<?php
$countryName = $_POST["countryname"];
$stateName = $_POST["statename"];
$localityName = $_POST["localityname"];
$orgName = $_POST["orgname"];
$orgunitName = $_POST["orgunitname"];
$commonName = $_POST["commonname"];
$email = $_POST["email"];
$days = $_POST["days"];
$cafile = $_POST["cafile"];
$capvtfile = $_POST["capvtfile"];
$capass = $_POST["capass"];
$usercertfile = $_POST["usercertfile"];
$userpvtfile = $_POST["userpvtfile"];
$userpass = $_POST["userpass"];

$dn = array(
    "countryName" => $countryName,
    "stateOrProvinceName" => $stateName,
    "localityName" => $localityName,
    "organizationName" => $orgName,
    "organizationalUnitName" => $orgunitName,
    "commonName" => $commonName,
    "emailAddress" => $email
);

$privkey = openssl_pkey_new();

$csr = openssl_csr_new($dn, $privkey);

$cacert = file_get_contents($cafile);
$caprivkey = array(file_get_contents($capvtfile),$capass);

$usercert = openssl_csr_sign($csr,$cacert,$caprivkey,$days);
openssl_x509_export($usercert,$certout);
echo $certout;

file_put_contents($usercertfile,$certout);

openssl_pkey_export($privkey,$pkeyout,$userpass);
//Set user password above
file_put_contents($userpvtfile,$pkeyout);
?>
