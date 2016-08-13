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
$pvtfile = $_POST["pvtfile"];
$cpass = $_POST["cpass"];

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

$sscert = openssl_csr_sign($csr, null, $privkey, $days);

openssl_x509_export($sscert, $certout) and var_dump($certout);
openssl_pkey_export($privkey, $pkeyout, $cpass) and var_dump($pkeyout);

file_put_contents($cafile,$certout);
file_put_contents($pvtfile,$pkeyout);

while (($e = openssl_error_string()) !== false) {
    echo $e . "\n";
}
?>