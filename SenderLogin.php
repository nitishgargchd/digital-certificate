<!DOCTYPE html>
<html>
<style>
body {
    background-image: url("Certificates.jpeg");
}
input[type=text],[type=file], select {
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
<title>Sender Login</title>
</head>

<body>

<h1>Sender Login</h1>
<div class="center">
    
  <form action="datasign.php" method="post">
    <label for="data">Data</label>
    <input type="text" id="data" name="data"><br>
    
    <label for="pvtfile">Private Key File</label>
    <input type="text" id="userpvtfile" name="userpvtfile"><br>

    <label for="pass">Passphrase</label>
    <input type="text" id="pass" name="pass"><br>
     
	
    <center>
    <input type="submit" value="Submit">
</center>
  </form>
</div>

</body>
</html>