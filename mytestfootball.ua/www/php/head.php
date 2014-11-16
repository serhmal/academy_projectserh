<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="http://mytestfootball.ua/css/style_1.css">
</head>

<body>
<nav class="main_menu">
            
            	<ul class="menu">
                	<li class="menu_list"><a href=http://mytestfootball.ua/menu/home.php>HOME</a></li>
  					<li class="menu_list"><a href=http://mytestfootball.ua/menu/europe.php>EUROPE</a></li>
                    	
                    <li class="menu_list"><a href=#>COUNTRY</a>
                    	<?php $name_menu_list= "countries";?>
                    	<ul class="submenu">
                        	<li>
                            <?php 
                            include ("menu_list.php");
            				?>	
            				</li>
                            <li><a href=http://mytestfootball.ua/forms/info_form_country.php>
                            <span class="colortext">Add country</span></a></li>	
                    	</ul>
                      </li>
		</ul>
            
            </nav>
</body>
</html>
