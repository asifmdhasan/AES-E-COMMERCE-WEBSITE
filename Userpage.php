<?php
if(isset($_COOKIE['abc'])){
	
?>
<body>
<table border="1" height="100%" width="100%" bgcolor="#999999">
<tr valign="top"><td><legend>Catagories :</legend>
<select name="product"><br/>
			<option value="shirt">Shirt</option>
			<option value="pant">Pant</option>
			<option value="shoe">Shoe</option><br/><br/><br/>
			<br/><input name="submit"type="submit" value="Search"><br/><br/>			
<legend>Sort by price :</legend>
From :<input type="text" name="taka" size="3"><br/>
To &nbsp  &nbsp :<input type="text" name="taka"size="3"><br/>
 &nbsp  &nbsp  &nbsp  &nbsp <input name="submit"type="submit" value="Search"><br/>
 <br/><input name="cart"type="submit" value="View Cart"><br/><br/>
 &nbsp  &nbsp  &nbsp  &nbsp &nbsp <a href='Logout.php'>logout </a> <br/><br/>




<td><table width="500">
<img src = "abc.jpg" width="200px" height="150px"></br>
	    	<td style="color:blue">
			<a href = "https://www.youtube.com/watch?v=TqDXNIoajK8" target="new">cristiano</a></br>
			$20
</td>
</td> 
</tr>
</body>

<?php
}
?>