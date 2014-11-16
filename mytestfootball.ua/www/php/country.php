<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Country</title>
<link rel="stylesheet" type="text/css" href="../css/style_1.css">
</head>

<body>
<div id="content">
        	<?php include ("head.php");?>
            <?php   $country = $_GET["country"]; ?>
            
        <div  id="menu_left_content" >
        
       	<?php include ("left_content_country.php"); ?>
        </div>
        
        <div  id="menu_right_content">      </div>
      
		<div  id="menu_middle_content"> 
            <iframe width="450" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=		"https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=uk&amp;geocode=&amp;aq=0&amp;oq=ukr&amp;sll=49.548355,25.597669&amp;sspn=0.10937,0.200844&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A30%BA%D1%80%D0%0%D1%97%D0%BD%D0%B0&amp;ll=48.379433,31.16558&amp;spn=14.339247,25.708008&amp;t=m&amp;z=5&amp;output=embed"></iframe><br /><small></small> 		</div>
	</div> 
</body>  
</html>
