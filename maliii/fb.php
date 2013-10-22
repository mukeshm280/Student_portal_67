<html>
   <title>
       student portal
   </title>
   <head>
       
   </head>
<body bgcolor="#CCCCCC">
   <div align="justify">
      <img src="img/logo.jpg" height="200" width="1492"/>   </div>
	  <div align="right">
   <form action="home.php" method="post">
      #headerPan{width:778px; height:228px; position:relative; margin:0 auto;}
#headerleftPan{width:46px; height:228px; float:left; background:url(images/leftfolder.gif) 0 0 no-repeat;}
     <b> Username :</b><input type="text" name="username"/>
	  <b>Password :</b><input type="text" name="pswd"/>
	  <input type="submit" value="Login" name="Login"/></br>
  </form>
  
  <form method="post" action="fb.php">

    <table align="left" width="400" height="495">
	<th colspan="2">Registration Form</th>
    <tr>
   	 <td  bordercolordark="#999933" bgcolor="#999999" >First Name :</td><td bordercolordark="#999933" bgcolor="#999999"><input type="text" name="fname" /></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Last  Name :</td><td bordercolordark="#999933" bgcolor="#999999"><input type="text" name="lname" /></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Sex :</td><td bordercolordark="#999933" bgcolor="#999999"><select name="sex"/> <option value="NULL">Select</option> 
     <option option value="Male"> Male</option><option option value="Female"> Female</td><td></option></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Roll No.:</td><td bordercolordark="#999933" bgcolor="#999999"><input type="text" name="r_no" /></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Email :</td><td bordercolordark="#999933" bgcolor="#999999"><input type="text" name="email" /></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Password:</td><td bordercolordark="#999933" bgcolor="#999999"><input type="text" name="pswd" /></td></tr></br>
   <tr><td  bordercolordark="#999933" bgcolor="#999999" >Re-enter Password:</td><td bordercolordark="#999933" bgcolor="#999999"><input type="text" name="rpswd" /></td></tr></br>
   <tr><td  bordercolordark="#0000CC" bgcolor="#993300" colspan="2" align="center" ><input type="submit" value="Submit" name="submit"/></td></tr>
  </table>
</form>
</div>
       
</body>

</html>