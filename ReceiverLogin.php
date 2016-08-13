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
<title>Receiver Login</title>
</head>

<body>

<h1>Receiver Login</h1>
<div class="center">
    
  <form action="dataverify.php" method="post">
    <label for="usercertfile">User Certificate File</label>
    <input type="text" id="usercertfile" name="usercertfile"><br>
    
    <label for="data">Data</label>
    <input type="text" id="data" name="data"><br>

    <label for="sign">sign</label>
    <input type="text" id="sign" name="sign"><br>
      
    <center>
    <input type="submit" value="Verify">
</center>
  </form>
</div>

</body>
</html>