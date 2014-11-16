<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="http://mytestfootball.ua/css/style_form.css" type="text/css">
<title>form_clubs_trophies</title>
</head>

<body>
<?php 

$year = $_REQUEST['year'];
$trophies_id = $_REQUEST['trophies_id'];
$clubs_id = $_REQUEST['clubs_id'];
?>

<fieldset>
<legend align="center">Add Clubs Trophies</legend> 

	<?php 
	if ($trophies_id=="Select Trophy")
		{echo "Select Trophy!"; ?>
       <input type="button" value="Back" onClick="window.history.go(-1)"></input>
		<?php exit();}
	elseif ($trophies_id=="Add Trophy")
			  { include ('info_form_trophy.php'); exit();}
			  
	if ($clubs_id=="Select Club")
		{echo "Select Club!"; ?>
       <input type="button" value="Back" onClick="window.history.go(-1)"></input>
		<?php exit();}
	elseif ($clubs_id=="Add Club")
			  { include ('info_form_club.php'); exit();}
	?>
        
</fieldset>

<?php 
include ("../db.php");

/*Перевірка наявності WINNER TROPHY в бд */

$sql="SELECT * FROM clubs_trophies WHERE year='$year' AND trophies_id='$trophies_id'";
 		$row=mysql_query($sql);
		$num_row=mysql_num_rows($row);
		echo "num_row=$num_row";
 if ($num_row==0) 
 	{ $insert_sql = "INSERT INTO clubs_trophies (year, trophies_id, clubs_id) VALUES ('$year', '$trophies_id', '$clubs_id')"; 
		echo $insert_sql;
		mysql_query($insert_sql); 
 					mysql_error();
 		echo "mysql_affecte=", mysql_affected_rows();
		if (mysql_affected_rows()>0)
		{ echo "<p>New WINNER TROPHY entered into the database</p>";
			}
		else 
 		{ echo "ERROR"; 
 			}	
 	} 
 else 
 { 
 echo "This WINNER TROPHY is available in the database"; 
 }

?>
   
 	<input type="button" value="OK" onClick="window.history.go(-2)"></input>


</body>
</html>
