<html>
   <title>Student Portal</title>
   <head>Home</head>
   <body bgcolor="#FF99FF">
       <h1><center>Welcome to the Student Portal</center></h1>
	   
   </body>
</html>
<?php
	$con=mysql_connect("home.php","localhost","");
   mysql_connect_db("sp") or die(mysql_error());
   $data=mysql_query($con,"SELECT * FROM reg") 
       or die(mysql_error());
	$info=mysql_fetch_array($data);
	print "<b>Name:</b>".$info['fname']." ";
?>