<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Countries Leagues Clubs</title>
<link rel="stylesheet" type="text/css" href="../css/style_1.css">
</head>

<body>
<div id="content">
        <?php include ("head.php");
         		$country = $_GET["country"]; 
		 		$league = $_GET["league"];
		 ?>  
        <div  id="menu_left_content" >
       <?php include ("left_content_country.php"); ?>
</div>

        <div  id="menu_right_content"> 
           <?php include ("right_content_country_league.php"); ?>
      </div>
      
		<div  id="menu_middle_content"> 		</div>
</div> 
</body>
</html> 