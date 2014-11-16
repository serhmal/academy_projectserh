<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>middle_content_trophy_club</title>
<link rel="stylesheet" type="text/css" href="http://mytestfootball.ua/css/style_1.css">
</head>

<body>
 	<br/>
    <h4 align="left"> Clubs Trophy</>
    <br/>
    <?php 
			/*вибираємо id для Club*/	
		$select = mysql_query ("SELECT id FROM clubs WHERE name='$club'");
		$id_select = mysql_fetch_object($select);
		$id = $id_select->id;
		/*Вибірка списку Trophy з  clubs_trophies*/				
		$sql = "SELECT * FROM  clubs_trophies WHERE clubs_id=$id ORDER BY year ";
		$result_select = mysql_query($sql);	
		while($object = mysql_fetch_object($result_select))
			{/*вибираємо Trophy по $object->id */	 
			$select_club = mysql_fetch_object(mysql_query ("SELECT * FROM trophies WHERE id='$object->id'")); 
			echo "<p>$object->year - $select_club->name</p>"; 
			}
	?>
    	<a href=/forms/info_form_clubs_trophies.php>
                <span class="colortext">Add clubs trophy</span></a>	
</body>
</html>
