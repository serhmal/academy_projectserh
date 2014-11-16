<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="http://mytestfootball.ua/css/style_form.css" type="text/css">
<title>Untitled Document</title>
</head>

<body>
<?php 


$name = $_REQUEST['name'];
$countries_id = $_REQUEST['countries_id'];
?>

<fieldset>
<legend>Add City</legend>
 
	<?php 
	if ($countries_id=="Select Country")
		{echo "Select Country!"; 
		?>
       <input type="button" value="Back" onClick="window.history.go(-1)"></input>
		<?php exit();}
	elseif ($countries_id=="Add Country")
			  { include ('info_form_country.php'); exit();}
		?>
        
</fieldset>

<?php 
include ("../db.php");
/*Перевірка наявності City в бд */

$sql="SELECT * FROM cities WHERE name='$name' AND countries_id='$countries_id'";
 		$row=mysql_query($sql);
		$num_row=mysql_num_rows($row);
		
 if ($num_row==0) 
 	{ $insert_sql = "INSERT INTO cities (name, countries_id) VALUES ('$name', '$countries_id')"; 
		echo $insert_sql;
		mysql_query($insert_sql); 
 					mysql_error();
 		
		if (mysql_affected_rows()>0)
		{ echo "<p>New CITY entered into the database</p>";
			}
		else 
 		{ echo "ERROR"; 
 			}	
 	} 
 else 
 { 
 echo "This CITY is available in the database"; 
 }

?>
   
 	<input type="button" value="OK" onClick="window.history.go(-2)"></input>


</body>
</html>
