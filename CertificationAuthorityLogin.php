<!DOCTYPE html>
<html>
<style>
body {
    background-image: url("Certificates.jpeg");
}
input[type=text],[type=email], select {
    width:100%;
    padding: 5px 7px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


.center {
    background-color: #f5f5f0;
    width: 700px;
    padding: 25px;
    border: 25px;
    margin: 25px;
    }

</style>
<head>
<title>Certification Authority Login</title>
</head>

<body>

<h1>Certification Authority Login</h1>
<div class="center">
    
  <form action="csrnew.php" method="post">
    <label for="countryname">Country Name</label>
    <input type="text" id="countryname" name="countryname"><br>
    
    <label for="statename">State Or Province Name</label>
    <input type="text" id="statename" name="statename"><br>

    <label for="localityname">Locality Name</label>
    <input type="text" id="localityname" name="localityname"><br>

    <label for="orgname">Organisation Name</label>
    <input type="text" id="orgname" name="orgname"><br>

    <label for="orgunitname">Organisational Unit Name</label>
    <input type="text" id="orgunitname" name="orgunitname"><br>

    <label for="commonname">Common Name</label>
    <input type="text" id="commonname" name="commonname"><br>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email"><br>

    <label for="days">No. of Days</label>
    <input type="text" id="days" name="days"><br>

    <label for="cafile">Ceritficate File</label>
    <input type="text" id="cafile" name="cafile"><br>

    <label for="pvtfile">Private Key File</label>
    <input type="text" id="pvtfile" name="pvtfile"><br>
    
    <label for="cpass">Certificate Passphrase</label>
    <input type="text" id="cpass" name="cpass"><br>
    
      
    <center>
    <input type="submit" value="Submit">
</center>
  </form>
</div>

</body>
</html>