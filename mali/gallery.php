<!DOCTYPE html>
<html>
<head>
<style>
div.img
{
  margin: 2px;
  border: 1px solid #0000ff;
  height: auto;
  width: auto;
  float: left;
  text-align: center;
}	
div.img img
{
  display: inline;
  margin: 3px;
  border: 1px solid #ffffff;
}
div.img a:hover img {border: 1px solid #0000ff;}
div.desc
{
  text-align: center;
  font-weight: normal;
  width: 120px;
  margin: 2px;
}
</style>
</head>
<body bgcolor="#C8C8C8">
<a href="registration.php"><b> Home</b></a>
<div align="right">
   <form action="home.php" method="post">
      
      Username :<input type="text" name="username"/>
	  Password :
	  <input type="text" name="pswd"/>
	  <input type="submit" value="Login" name="Login"/></br>
  </form>
</div>

<img src="img/logo.jpg" height="265" width="1492"/>


<div class="img">
 <a target="_blank" href="klematis_big.htm"><img src="img/admin.jpg" alt="Klematis" width="250" height="200"></a>
 <div class="desc">Admin Block</div>
</div>
<div class="img">
 <a target="_blank" href="klematis2_big.htm"><img src="img/nitlogo.jpg"alt="Klematis" width="250" height="200"></a>
 <div class="desc">Nitt Logo</div>
</div>
<div class="img">
 <a target="_blank" href="klematis3_big.htm"><img src="img/Beryl.JPG" width="250" height="200"></a>
 <div class="desc">Beryl Hostel</div>
</div>
<div class="img">
 <a target="_blank" href="klematis4_big.htm"><img src="img/hospital.JPG" alt="Klematis" width="250" height="200"></a>
 <div class="desc">Hospital</div>
</div>

</body>
</html>
