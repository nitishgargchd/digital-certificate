<?php
/*
// Fill in data for the distinguished name to be used in the cert
// You must change the values of these keys to match your name and
// company, or more precisely, the name and company of the person/site
// that you are generating the certificate for.
// For SSL certificates, the commonName is usually the domain name of
// that will be using the certificate, but for S/MIME certificates,
// the commonName will be the name of the individual who will use the
// certificate.
$dn = array(
    "countryName" => "UK",
    "stateOrProvinceName" => "Somerset",
    "localityName" => "Glastonbury",
    "organizationName" => "The Brain Room Limited",
    "organizationalUnitName" => "PHP Documentation Team",
    "commonName" => "Wez Furlong",
    "emailAddress" => "wez@example.com"
);

// Generate a new private (and public) key pair
$privkey = openssl_pkey_new();

// Generate a certificate signing request
$csr = openssl_csr_new($dn, $privkey);

// You will usually want to create a self-signed certificate at this
// point until your CA fulfills your request.
// This creates a self-signed cert that is valid for 365 days
$sscert = openssl_csr_sign($csr, null, $privkey, 365);

// Now you will want to preserve your private key, CSR and self-signed
// cert so that they can be installed into your web server, mail server
// or mail client (depending on the intended use of the certificate).
// This example shows how to get those things into variables, but you
// can also store them directly into files.
// Typically, you will send the CSR on to your CA who will then issue
// you with the "real" certificate.
openssl_csr_export($csr, $csrout) and var_dump($csrout);
openssl_x509_export($sscert, $certout) and var_dump($certout);
openssl_pkey_export($privkey, $pkeyout, "mypassword") and var_dump($pkeyout);

// Show any errors that occurred here
while (($e = openssl_error_string()) !== false) {
    echo $e . "\n";
}


function addcsr(){
    $dn = array(
        "countryName" => "INDIA",
        "stateOrProvinceName" => "Chandigarh",
        "localityName" => "Sector24D",
        "organizationName" => "VIT",
        "organizationalUnitName" => "SCOPE",
        "commonName" => "SCSE",
        "emailAddress" => "gargnitish007@gmail.com"
    );

    $privateKey = openssl_pkey_new(array(
	'private_key_bits' => 1024,
	'private_key_type' => OPENSSL_KEYTYPE_RSA,
	));

	openssl_pkey_export($privateKey, $privkey,"123");

    $pubkey = openssl_pkey_get_details($privateKey);
    $pubkey = $pubkey["key"];

    $csr = openssl_csr_new($dn, $privkey);
    openssl_csr_export($csr, $csrstring);

    $cacert = "file://ca.pem";
    $privkeyca = array("file://ca.key", "daniel123");

    $usercert = openssl_csr_sign($csrstring, $cacert, $privkeyca, 365);

    // test
    $this->load->view('create_view', $data);

}





addcsr();







*/
?>





<?php
/**/
$dn = array("countryName" => 'XX', "stateOrProvinceName" => 'State', "localityName" => 'SomewhereCity', "organizationName" => 'MySelf', "organizationalUnitName" => 'Whatever', "commonName" => 'mySelf', "emailAddress" => 'user@domain.com');
$privkeypass = '1234';
$numberofdays = 365;
$outfilename = "ret.crt";
$privkey = openssl_pkey_new();
$csr = openssl_csr_new($dn, $privkey);
$sscert = openssl_csr_sign($csr, null, $privkey, $numberofdays);
openssl_x509_export($sscert, $publickey);

openssl_x509_export($sscert, $str_cert);

$res_pubkey = openssl_pkey_get_public($str_cert);


//$pub_key = openssl_pkey_get_public(file_get_contents('./cert.crt')); 
//$keyData = openssl_pkey_get_details($pub_key); 
//file_put_contents('./key.pub', $keyData['key']); 



openssl_pkey_export($privkey, $privatekey, $privkeypass);
openssl_pkey_export_to_file ($privkey ,$outfilename, $privkeypass);
openssl_csr_export($csr, $csrStr);

echo $privatekey;  // Will hold the exported PriKey 
echo "<br />";
echo $res_pubkey; 
echo "<br />";
echo $publickey;  // Will hold the exported PubKey
echo "<br />";
echo $csrStr;     // Will hold the exported Certificate

?>