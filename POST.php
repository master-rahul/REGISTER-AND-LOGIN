<html>
<body>
<?php
$_POST["user"];
$_POST["pass"];
$connection=mysql_connect("localhost","root","");
mysql_select_db("login",$connection);
$result=mysql_query("SELECT * FROM `data` ",$connection);
while($row=mysql_fetch_array($result))
{
	
	if(($_POST["user"]===$row["user"]) && ($_POST["pass"]===$row["password"]))
{
	echo readfile("Sesional.php");
}
	}
$a=5;
$b=5;
if($a=$b)
{
	echo readfile("Homepage.php");
}
	


?>
</body>
</html>