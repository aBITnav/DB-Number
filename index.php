<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body background="a.jpg">
<form name="f" method="post" action="#">
	USER NAME:<input type="number"  name="name"><br>
	PASSWORD :<input type="number" name="pass"><br>
	<input type="submit" name="Insert">
	<hr>
</form>

<?php
$con=mysqli_connect('127.0.0.1','root','','person');
if(!$con) echo "server problem";
$name=$_POST['name'];
$password=$_POST['pass'];
$sql="INSERT INTO `info` (`USER NAME`, `Password`) VALUES ('$name', '$password');";
if(!mysqli_query($con,$sql))
	echo "not INSERTed";
else echo "INSERTed";
?> 

<a href="dis.php">CLICK HERE TO SEE THE CONTENTS OF THE DATA BASE</a>
</body>
</html>