<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>right_content_country</title>
<link rel="stylesheet" type="text/css" href="http://mytestfootball.ua/css/style_1.css">
</head>

<body>
<br/><br/><h4><?php echo $country; ?></> <br/>
            <h4><?php echo $league;?> </> 
  	<ul>
  		<li>
           <?php 
		   		/*вибираємо id для League*/	
		  $select = mysql_query ("SELECT id FROM leagues WHERE name='$league'");
				$id_select = mysql_fetch_object($select);
					$id = $id_select->id;
				/*Вибірка списку клубів Ліги*/				
				$sql = "SELECT * FROM clubs WHERE leagues_id=$id ORDER BY name ";
				$result_select = mysql_query($sql);
				/*Вивід клубів */ 
				while($object = mysql_fetch_object($result_select))
				{	 echo "<p><a href='http://mytestfootball.ua/php/club_info.php?club=".$object->name." & league=".$league." & country=".$country."' 
				 		value = '$object->name'>$object->name</a></p>"; 
					}
		   ?>
     </li>
         	<li><a href=http://mytestfootball.ua/forms/info_form_club.php>
                <span class="colortext">Add club</span></a>
            </li>	
</ul>	        
</body>
</html>
