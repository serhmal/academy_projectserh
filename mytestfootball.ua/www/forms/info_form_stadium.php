<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<link rel="stylesheet" href="http://mytestfootball.ua/css/style_form.css" type="text/css"> 
<title>Add Stadium</title> 
</head> 
<body> 
<form action="/forms/form_stadium.php" method="post" name="form_stadium"> 
<fieldset> 
<legend>Add Stadium</legend>

<label for="name">Name:</label><br/> 
<input required type="text" name="name" size="30"><br/> 

<label for="cities_id">City</label><br/> 

	<?php 
		include ("../db.php");
		$sql = "SELECT * FROM cities ORDER BY name";
		$result_select = mysql_query($sql);
	?>
   <select required  name="cities_id">
   <option  type="text" value= "Select City">  Select City  </option>
    <?php 
		while ($row = mysql_fetch_object($result_select)) {
	?>
    <option  type="int" value= "<?php echo $row->id;?>">  <?php echo $row->name;?>  </option>
    
    <?php 
		}
	?>
    <option  type="text" value= "Add City">  Add City  </option>
    </select><br/>

<label for="year">Year Foundation</label><br/> 
<input value="0" type="year" name="year" size="4"><br/>

<label for="capacity">Capacity</label><br/> 
<input value="0" type="int" name="capacity" ><br/>

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

