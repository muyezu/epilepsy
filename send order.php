<?php 
session_start();
?>

<html>
<body>


<form action="receive order.php" method="post"> 

<h1>Shirt Size</h1>
<select name="size">
  <option value="Small">Small</option>
  <option value="Medium">Medium</option>
  <option value="Large">Large</option>
</select>

<h1>Shirt Color</h1>
<select name="color">
  <option value="Red">Red</option>
  <option value="Blue">Blue</option>
  <option value="Yellow">Yellow</option>
  <option value="Black">Black</option>
</select>

Name: <input type="text" name="name"><br> 
Address: <input type="text" name="address"><br> 
<input type="submit"> 
</form>
