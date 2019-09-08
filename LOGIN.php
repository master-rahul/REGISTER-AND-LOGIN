<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="cool-wallpaper-hd.jpg">
<font align="right" color="#000000" size="5" face="Tahoma, Geneva, sans-serif"><b>
<?php
$date=date("d/m/y");
echo $date;
?>
<br>
<?php
$time=date("h:i:s");
echo $time;
?></b></font>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<font color="#0000FF" face="Palatino Linotype, Book Antiqua, Palatino, serif" size="+10" draggable="true" style= style="animation-delay: -2s"><b>          LOGIN</b></font></pre>
<br>

<br>
<form action="POST.php" method="post">
<font color="#990000" face="Courier New, Courier, monospace" size="+1"><b>Username :</b></font><input type="text" name="user" ><br>
<font color="#990000" face="Courier New, Courier, monospace" size="+1"><b>Password :</b></font><input type="password" name="pass" ><br>
<center><pre>	      <input type="submit" value="Submit" border="2"></pre></center>
</form>

</center>
</body>
</html>