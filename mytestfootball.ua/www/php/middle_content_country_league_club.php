<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>middle_content_country_league_club</title>
<link rel="stylesheet" type="text/css" href="http://mytestfootball.ua/css/style_1.css">
</head>

<body>
 <br/><br/> 
    <h4 align="left"> <?php echo $club; ?></><br/>
     <?php 
		   		
				$sql = "SELECT * FROM clubs WHERE name='$club'";
				$result_select = mysql_query($sql);
				$object = mysql_fetch_object($result_select);
			
			
			
			$res_country=mysql_fetch_object(mysql_query("SELECT name FROM countries WHERE id=$object->countries_id"));	
			$res_city=mysql_fetch_object(mysql_query("SELECT name FROM cities WHERE id=$object->cities_id"));
			$res_stadium=mysql_fetch_object(mysql_query("SELECT name FROM stadiums WHERE id=$object->stadiums_id"));	
			$res_league=mysql_fetch_object(mysql_query("SELECT name FROM leagues WHERE id=$object->leagues_id"));
			$res_president=mysql_fetch_object(mysql_query("SELECT name FROM presidents WHERE id=$object->presidents_id"));	
		?>		
				<p align="left"><?php echo "Country:     ",$res_country->name;?></br>
				<?php echo "City:     ",$res_city->name;?></br>
				<?php echo "Stadium:     ",$res_stadium->name;?></br>
		   		<?php echo "League:     ",$res_league->name;?></br>
    			<?php echo "President:     ",$res_president->name;?></br>
    			<?php echo "Year Foundation:     ",$object->year;?></br>
    			<?php echo "Budget:     ",$object->budget;?></p>
</body>
</html>
