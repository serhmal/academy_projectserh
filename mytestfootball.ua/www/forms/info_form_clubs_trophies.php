<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<link rel="stylesheet" href="http://mytestfootball.ua/css/style_form.css" type="text/css"> 
<title>Add Clubs Trophies</title> 
</head> 
<body> 
<form action="/forms/form_clubs_trophies.php" method="post" name="form_clubs_trophies"> 
<fieldset> 
<legend>Add Clubs Trophies</legend>

<label for="year">Year Competition</label><br/> 
<input required type="year" name="year" size="4"><br/>


<label for="trophies_id">Trophy</label><br/> 
<?php 
		include ("../db.php");
		$sql = "SELECT * FROM trophies ORDER BY name";
		$result_select = mysql_query($sql);
	?>
<select required  name="trophies_id">
 	<option  type="text" value= "Select Trophy">  Select Trophy  </option>
    <?php 
		while ($row = mysql_fetch_object($result_select)) {
	?>
    <option  type="int" value= "<?php echo $row->id;?>">  <?php echo $row->name;?>  </option>
    <?php 
		}
	?>
     <option  type="text" value= "Add Trophy">  Add Trophy  </option>
</select><br/>


<label for="trophies_id">Club</label><br/> 
	<?php 
		include ("../db.php");
		$sql = "SELECT * FROM clubs ORDER BY name";
		$result_select = mysql_query($sql);
	?>
<select required  name="clubs_id">
 	<option  type="text" value= "Select Club">  Select Club  </option>
    <?php 
		while ($row = mysql_fetch_object($result_select)) {
	?>
    <option  type="int" value= "<?php echo $row->id;?>">  <?php echo $row->name;?>  </option>
    <?php 
		}
	?>
    <option  type="text" value= "Add Club">  Add Club  </option>
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

