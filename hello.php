<html>
<head>
<div class="page-header">
    	<h3>Welcome To Online Shopping System</h3>
    	</div>
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
</body>
</html>