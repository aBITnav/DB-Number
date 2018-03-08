<!DOCTYPE html>
<html>
<head>
	<title>display</title>
</head>
<body>

<?php
$con=mysqli_connect('127.0.0.1','root','','person');
$sql="SELECT * FROM info;";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
for($i=0;$i<$row;$i++){
	$data=mysqli_fetch_assoc($result);
	echo ($i+1)."User name = ".$data['USER NAME']." <br> "."Password : ".$data['Password'];
	echo "<br><br>"; }
?>
</body>
</html>