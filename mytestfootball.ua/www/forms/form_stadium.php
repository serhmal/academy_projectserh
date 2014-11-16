<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="http://mytestfootball.ua/css/style_form.css" type="text/css">
<title>form_stadium</title>
</head>

<body>
<?php 

$name = $_REQUEST['name'];
$cities_id = $_REQUEST['cities_id'];
$year = $_REQUEST['year'] ? $_REQUEST['year'] : 'NULL';
$capacity = $_REQUEST['capacity'] ? $_REQUEST['capacity'] : 'NULL';
?>

<fieldset>
<legend>Add Stadium</legend>
 
	<?php 
if ($cities_id=="Select City")
		{echo "Select City!"; ?>
       <input type="button" value="Back" onClick="window.history.go(-1)"></input>
		<?php exit();}
	elseif ($cities_id=="Add City")
			  { include ('info_form_city.php'); exit();}
		?>
        
</fieldset>

<?php 
include ("../db.php");

/*Перевірка наявності STADIUM в бд */

$sql="SELECT * FROM stadiums WHERE name='$name' AND cities_id='$cities_id'";
 		$row=mysql_query($sql);
		$num_row=mysql_num_rows($row);
		
 if ($num_row==0) 
 	{ $insert_sql = "INSERT INTO stadiums (name, cities_id, year, capacity) VALUES ('$name', '$cities_id', '$year', '$capacity')"; 
		echo $insert_sql;
		mysql_query($insert_sql); 
 					mysql_error();
 		
		if (mysql_affected_rows()>0)
		{ echo "<p>New STADIUM entered into the database</p>";
			}
		else 
 		{ echo "ERROR"; 
 			}	
 	} 
 else 
 { 
 echo "This STADIUM is available in the database"; 
 }

?>
   
 	<input type="button" value="OK" onClick="window.history.go(-2)"></input>


</body>
</html>
