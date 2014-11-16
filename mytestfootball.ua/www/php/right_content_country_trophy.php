<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>right_content_country_trophy</title>
<link rel="stylesheet" type="text/css" href="http://mytestfootball.ua/css/style_1.css">
</head>

<body>
<br/><br/><h4><?php echo $country; ?></> <br/>
            <h4><?php echo $trophy;?> </> 
  	<ul>
  		<li>
           <?php 
		   		/*вибираємо id для Trophy*/	
		  $select = mysql_query ("SELECT id FROM trophies WHERE name='$trophy'");
				$id_select = mysql_fetch_object($select);
					$id = $id_select->id;
					
				/*Вибірка списку клубів з  clubs_trophies*/				
				$sql = "SELECT * FROM  clubs_trophies WHERE trophies_id=$id ORDER BY year ";
				$result_select = mysql_query($sql);
				
				/*Вивід id клубів */ 
				while($object = mysql_fetch_object($result_select))
				
				{/*вибираємо Club по $object->id */	 
				$select_club = mysql_fetch_object(mysql_query ("SELECT * FROM clubs WHERE id='$object->id'")); 
				
				echo "<p>$object->year - $select_club->name</p>"; 
					}
		   ?>
     </li>
         	<li><a href=http://mytestfootball.ua/forms/info_form_clubs_trophies.php>
                <span class="colortext">Add clubs trophies</span></a>
            </li>	
</ul>	        
</body>
</html>
