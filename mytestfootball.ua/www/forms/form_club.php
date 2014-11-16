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
$cities_id = $_REQUEST['cities_id'];
$stadiums_id = $_REQUEST['stadiums_id'];
$leagues_id = $_REQUEST['leagues_id'];
$year = $_REQUEST['year'] ? $_REQUEST['year'] : 'NULL';
$budget = $_REQUEST['budget'] ? $_REQUEST['budget'] : 'NULL';
$presidents_id = $_REQUEST['presidents_id'] ? $_REQUEST['presidents_id'] : 'NULL';
?>

<fieldset>
<legend align="center">Add Club</legend> 

<?php 
if ($countries_id=="Select Country") /*вибір країни*/
		{echo "Select Country!"; 
		?>
       <input type="button" value="Back" onClick="window.history.go(-1)"></input>
		<?php exit();}
	elseif ($countries_id=="Add Country")
		{ include ('info_form_country.php'); exit();}
			  
if ($cities_id=="Select City") /*вибір City*/
		{echo "Select City!"; ?>
       <input type="button" value="Back" onClick="window.history.go(-1)"></input>
		<?php exit();}
	elseif ($cities_id=="Add City")
		{ include ('info_form_city.php'); exit();}
		
if ($stadiums_id=="Select Stadium") /*вибір Stadium*/
		{echo "Select Stadium!"; ?>
       <input type="button" value="Back" onClick="window.history.go(-1)"></input>
		<?php exit();}
	elseif ($stadiums_id=="Add Stadium")
		{ include ('info_form_stadium.php'); exit();}
		
if ($leagues_id=="Select League") /*вибір League*/
		{echo "Select League!"; ?>
       <input type="button" value="Back" onClick="window.history.go(-1)"></input>
		<?php exit();}
	elseif ($leagues_id=="Add League")
		{ include ('info_form_league.php'); exit();}
			  
if ($presidents_id=="Add President")
		{ include ('info_form_president.php'); exit();}
?>		
</fieldset>

<?php
include ("../db.php");

/*Перевірка наявності CLUB в бд */

$sql="SELECT * FROM clubs WHERE name='$name' AND cities_id='$cities_id' AND countries_id='$countries_id'";
 		$row=mysql_query($sql);
		$num_row=mysql_num_rows($row);
		
 if ($num_row==0) 
 	{ $insert_sql = "INSERT INTO clubs (name, cities_id, stadiums_id, leagues_id, countries_id, year, budget, presidents_id)   			VALUES('$name', '$cities_id', '$stadiums_id', '$leagues_id', '$countries_id', '$year', '$budget', '$presidents_id')";
	echo $insert_sql;
	mysql_query($insert_sql);  
	mysql_error();
 		
		if (mysql_affected_rows()>0)
		{ echo "<p>New CLUB entered into the database</p>";
			}
		else 
 		{ echo "ERROR"; 
 			}	
 	} 
 else 
 { 
 echo "This CLUB is available in the database"; 
 }

?>
   
 	<input type=button value=OK onClick=window.history.go(-2)></input>




</body>
</html>
