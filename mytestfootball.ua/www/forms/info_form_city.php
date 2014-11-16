<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<link rel="stylesheet" href="http://mytestfootball.ua/css/style_form.css" type="text/css"> 
<title>Add City</title> 
</head> 
<body> 
<form action="/forms/form_city.php" method="post" name="form_city"> 
<fieldset> 
<legend>Add City</legend>

<label for="name">Name:</label><br/> 
<input required type="text" name="name" size="30"><br/> 



<label for="countries_id">Country</label><br/> 

	<?php 
		include ("../db.php");
		$sql = "SELECT * FROM countries ORDER BY name";
		$result_select = mysql_query($sql);
	?>
   <select required  name="countries_id">
   <option  type="text" value= "Select Country">  Select Country  </option>
    <?php 
		while ($row = mysql_fetch_object($result_select)) {
	?>
    <option  type="int" value= "<?php echo $row->id;?>">  <?php echo $row->name;?>  </option>
    <?php 
		}
	?>
    <option  type="text" value= "Add Country">  Add Country  </option>
</select><br/>

</fieldset> 
<br/> 
<fieldset> 

<input id="submit" type="submit" value="Add">
<input id="back" type="button" value="Back" onClick="window.history.go(-1)"></input>
<br/> 
</fieldset> 
</form> 
</body> 
</html>

