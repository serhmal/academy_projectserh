<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<link rel="stylesheet" href="http://mytestfootball.ua/css/style_form.css" type="text/css"> 
<title>Add Club</title> 
</head> 
<body> 
<form action="form_club.php" method="post" name="form_club"> 
<fieldset> 
<legend>Add Club</legend>

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

<label for="stadiums_id">Stadium</label><br/> 
	<?php 
		include ("../db.php");
		$sql = "SELECT * FROM stadiums ORDER BY name";
		$result_select = mysql_query($sql);
	?>
  	<select required  name="stadiums_id">
	<option  type="text" value= "Select Stadium">  Select Stadium  </option>
    <?php 
		while ($row = mysql_fetch_object($result_select)) {
	?>
    
    <option  type="int" value= "<?php echo $row->id;?>">  <?php echo $row->name;?>  </option>
    <?php 
		}
	?>
    <option  type="text" value= "Add Stadium">  Add Stadium  </option>
	</select><br/>

<label for="leagues_id">League</label><br/> 
	<?php 
		include ("../db.php");
		$sql = "SELECT * FROM leagues ORDER BY name";
		$result_select = mysql_query($sql);
	?>
   	<select required  name="leagues_id">
	<option  type="text" value= "Select League">  Select League  </option>
    <?php 
		while ($row = mysql_fetch_object($result_select)) {
	?>
    <?php 
		$row_country = mysql_fetch_object(mysql_query("SELECT name FROM countries WHERE id=$row->countries_id"));
		$country=$row_country->name;
	?>
    <option  type="int" value= "<?php echo $row->id;?>">  <?php echo "$row->name ($country)";?>  </option>
    <?php 
		}
	?>
    <option  type="text" value= "Add League">  Add League  </option>
	</select><br/>

<label for="year">Year Foundation</label><br/> 
	<input value="0" type="year" name="year" size="4"><br/> 

<label for="budget">Budget</label><br/> 
	<input value="0" type="int" name="budget" size="11"><br/>
 
<label for="presidents_id">President of the club</label><br/> 
	<?php 
		include ("../db.php");
		$sql = "SELECT * FROM presidents ORDER BY name";
		$result_select = mysql_query($sql);
	?>
	<select  name="presidents_id">
	<option type="int" value="0">  Select President  </option>
    <?php 
		while ($row = mysql_fetch_object($result_select)) {
	?>
    <option type="int" value= "<?php echo $row->id;?>">  <?php echo $row->name;?>  </option>
    <?php 
		}
	?> 
  	<option  type="text" value= "Add President">  Add President  </option>  
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

