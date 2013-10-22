<?php

$con=mysql_connect("localhost","root","");
$database=mysql_select_db("sp",$con);

if(isset($_POST['submit']))
{
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $sex=$_POST['sex'];
   $r_no=$_POST['r_no'];
   $email=$_POST['email'];
   $pswd=$_POST['pswd'];
   $rpswd=$_POST['rpswd'];
   if($fname=="")
   {
     echo "<script> alert ('Enter your First Name')</script>";	
     
	 //exit(1);
   }
   else if($lname=="")
   {
      echo "<script> alert ('Enter your last name')</script>";	
     //exit(1);
   }
  else  if($sex=="")
   {
     echo"Enter select your Sex";
     //exit(1);
   }
  else if($r_no=="")
   {
     echo"Enter your Rool No";
     //exit(1);
   }
   else if($email=="")
   {
     echo"Enter your Email Id";
     //exit(1);
   }
   else if($pswd=="")
   {
     echo"Enter your Password";
     //exit(1);
   }
   else if($pswd!=$rpswd)
   {
     echo"Password Didn't match!!";
     //exit(1);
   }
    else 
	{
	$que="insert into reg values ('$fname','$lname','$sex','$r_no','$email','$pswd')";
   
	mysql_query($que) OR die(mysql_error());
	
	   echo "<script> alert ('Congratulation Registration Successful')</script>";	
	}
}

?>
<html>
<head>
  <title>Welcome to Student Portal</title>
</head>

<body bgcolor="#C8C8C8">

<div align="right">
   <form action="home.php" method="post">
      
      Username :<input type="text" name="username"/>
	  Password :
	  <input type="text" name="pswd"/>
	  <input type="submit" value="Login" name="Login"/></br>
  </form>
</div>

<img src="img/logo.jpg" height="265" width="1492"/>
<a href="registration.php"><b> Home</b></a>
&nbsp;<a href="gallery.php"><b>Gallery</b></a>
&nbsp;<a href="registration.php"><b>Result</b></a>
&nbsp;<a href="registration.php"><b>Event</b></a>
&nbsp;<a href="contact.php"><b>Contacts</b></a>
&nbsp;

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <table   align="center" width="400" height="495">
	<th colspan="2">Registration Form</th>
    <tr>
   	 <td  bordercolordark="#999933" bgcolor="#999999" >First Name :</td><td bordercolordark="#999933" bgcolor="#999999"><input type="text" name="fname" /></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Last  Name :</td><td bordercolordark="#999933" bgcolor="#999999"><input type="text" name="lname" /></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Sex :</td><td bordercolordark="#999933" bgcolor="#999999"><select name="sex"/> <option value="NULL">Select</option> 
     <option option value="Male"> Male</option><option option value="Female"> Female</td><td></option></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Roll No.:</td><td bordercolordark="#999933" bgcolor="#999999"><input type="text" name="r_no" /></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Email :</td><td bordercolordark="#999933" bgcolor="#999999"><input type="text" name="email" /></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Password:</td><td bordercolordark="#999933" bgcolor="#999999"><input type="password" name="pswd" /></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Re-enter Password:</td><td bordercolordark="#999933" bgcolor="#999999"><input type="password" name="rpswd" /></td></tr></br>
   <tr><td  bordercolordark="#0000CC" bgcolor="#993300" colspan="2" align="center" ><input type="submit" value="Submit" name="submit"/></td></tr>
  </table>
</form>
<footer>
  <p>Posted by: Mukesh Mali</p>
  <p>Contact information: <a href="contact.php">205112067@nitt.edu</a>.</p>
</footer>

</body>


</html>
