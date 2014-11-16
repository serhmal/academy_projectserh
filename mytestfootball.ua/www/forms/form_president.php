<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="http://mytestfootball.ua/css/style_form.css" type="text/css">
<title>form_president</title>
</head>

<body>
<?php 
include ("../db.php");

$name = $_REQUEST['name'];

/*Перевірка наявності President в бд */

$sql="SELECT * FROM presidents WHERE name='$name'";
 		$row=mysql_query($sql);
		$num_row=mysql_num_rows($row);
		
 if ($num_row==0) 
 	{ $insert_sql = "INSERT INTO presidents (name) VALUES ('$name')"; 
		echo $insert_sql;
		mysql_query($insert_sql); 
 					mysql_error();
 		
		if (mysql_affected_rows()>0)
		{ echo "<p>New PRESIDENT entered into the database</p>";
			}
		else 
 		{ echo "ERROR"; 
 			}	
 	} 
 else 
 { 
 echo "This PRESIDENT is available in the database"; 
 }

?>
   
 	<input type="button" value="OK" onClick="window.history.go(-2)"></input>


</body>
</html>
