<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Club</title>
<link rel="stylesheet" type="text/css" href="../css/style_1.css">
</head>

<body>
<div id="content">
        <?php include ("head.php");
         		$country = $_GET["country"]; 
		 		$league = $_GET["league"];
				$club = $_GET["club"];
		 ?>  
        <div  id="menu_left_content" >
        
       <?php include ("left_content_country.php"); ?>
</div>

        <div  id="menu_right_content"> 
            <?php include ("right_content_country_league.php"); ?>
      </div>
      
		<div  id="menu_middle_content"> 
         <?php include ("middle_content_country_league_club.php"); ?>
         <?php include ("middle_content_trophy_club.php"); ?> 
 		</div>
        
      
            
</div> 
</body>
</html> 