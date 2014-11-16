<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>menu_list_trophy</title>
<link rel="stylesheet" type="text/css" href="../css/style_2_menu_country.css">

</head>
<style>
   a:link {
    color: #FFFFFF; 
    padding: 2px;  
   }
   a:hover {
    background: #786b59;  
    color: #FFFFFF;  
   } 
  </style>
<body>
	<ul class="menu_list_trophy">
             <li>
               <?php
				include ("../db.php");
	/*���� id ����� � ��*/ 
				$select = mysql_query ("SELECT id FROM countries WHERE name='$country'");
				$id_select = mysql_fetch_object($select);
					$id = $id_select->id;
	/*���� ������ �� �������  ����� � ��*/				
				$sql = "SELECT * FROM trophies WHERE countries_id=$id ORDER BY id ";
				$result_select = mysql_query($sql);
	/*���������� ������ */ 
				while($object = mysql_fetch_object($result_select))
				{	
				echo "<p><a href='http://mytestfootball.ua/php/trophy.php?trophy=".$object->name."&country=".$country."' 
				 		value = '$object->name'><span class='color_trophy'>$object->name</span></a></p>"; 
					}
				?>
            </li>
            <li><a href=http://mytestfootball.ua/forms/info_form_trophy.php>
                <span class="colortext">Add trophy</span></a>
            </li>	
     </ul>
    </body>
</html>