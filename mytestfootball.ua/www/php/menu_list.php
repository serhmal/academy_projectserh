<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="/css/style_1.css">
<title>menu_list</title>
</head>

<body> 
			<?php
				include ("../db.php");
				$sql = "SELECT * FROM $name_menu_list ORDER BY name";
				$result_select = mysql_query($sql);
						/*випадаючий список*/ 
				while($object = mysql_fetch_object($result_select))
				{	
				echo "<a href='http://mytestfootball.ua/php/country.php?country=".$object->name."' 
				value = '$object->name'>$object->name</a>"; 
					}
			?>
</body>
</html>