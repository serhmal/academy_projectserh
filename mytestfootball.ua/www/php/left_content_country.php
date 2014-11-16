<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>left_content_country</title>
<link rel="stylesheet" type="text/css" href="http://mytestfootball.ua/css/style_1.css">
</head>

<body>
<img weight="175px" height="33px" border="1px" src="http://mytestfootball.ua/img/logo-<?php echo $country; ?>.jpg" alt="Logo <?php echo $country; ?>"/>
      		<h4> <?php echo $country; ?></><br/>
            <h4> Football leagues: </>
            <?php 
				include ("menu_list_league.php");
			?>
            <br/>
             <h4> Football trophy: </>
             <?php 
				include ("menu_list_trophy.php");
			?> 
</body>
</html>
