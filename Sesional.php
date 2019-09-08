<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="sessional1.css">
</head>
<body bgcolor="lgreen">
<table border="5" width="1350"height="200"bgcolor="sky blue">
<tr>
<td height="200" width="250" >
<div>
<center>
<img src="logo.jpg">
</center
</div>
</td>
<td>
<div id="image">
<center><img src="cp.jpg" width="1100" height="200"></center>
</div></td>
</tr>
</table>
<table>
<h3 align="center"> <b>These are the few links<b> </center><h3>

<div id="hello">
<table border="5" width="1350"height="50"bgcolor="sky blue">
<tr>
<td><a href="https://www.facebook.com"><img src="index.jpg" height="80" width="250"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><a href="http://www.google.com/"><img src="goo.png"height="80" width="250"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><a href="http://www.google%20crome.in/"><img src="cm.jpg" height="80" width="250"></a></td></td></td>
<td ><a href="http://www.uc%20browser.com/"><img src="ucb.jpg" height="80" width="250">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><a href="http://www.opera.com/"><img src="oper.jpg" height="80" width="250"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</tr>
</table>
</div>
<h2>
<center>
<a href="reg.php" target="myframe"> <b><font color="black">REGISTRATION</font><b></a><br>
<a href="javascriptcal.html" target="myframe"><b> <font color="black">CALCULATOR<font><b></a></h2>
</font><br></center>
<center><iframe src="cct.jpg" width="600" height="500" name="myframe" align="center">
</center>
<?php
	
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'dbtest');
	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	
	$resul=mysql_query("SELECT * FROM `users` ",$dbcon);
	echo $resul;
		
?>

<body>
<html>