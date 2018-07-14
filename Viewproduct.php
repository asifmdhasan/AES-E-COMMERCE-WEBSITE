<?php

?>
	
	<style>
	ul#menu {
		padding:0;
	}
	ul#menu li {
		display:inline;
	}
	ul#menu li a {
		background-color:blue;
		color:white;
		padding: 10px 20px;
		text-decoration:none;
		border-radius: 4px 4px 0 0;
	}
	ul#menu li a:hover{
		background-color:orange
	}
	</style>
	
	<body align="center">
	
	<ul id="menu">
	<li><a href = "Viewproduct.php">View Product</a></li>
	<li><a href = "Productentry.php">Product Entry</a></li>
	<li><a href = "Viewcustomer.php">View Customer</a></li>
	<li><a href = "AdminLogout.php">Logout</a></li>
	</ul>
	
	
	<table border="1"  width="100%">
	<tr>
	
		<th>Product_Id</th>
		<th>Product_Name</th>
		<th>Image</th>
		<th>Catgory</th>
		<th>Update</th>
		<th>Delete</th>
		
		</tr>
		<tr>
		<td>1</td>
		<td>BlueShirt</td>
		<td><img src="blue.jpg"width="100px"height="80px"></td>
		<td>Shirt</td>
		<td><a href="Update.php">Update</td>
		<td><a href="Delete.php">Delete</td>
		
		</tr>
		
		<tr>
		<td>2</td>
		<td>Red Shirt</td>
		<td><img src="red.jpg"width="100px"height="80px"></td>
		<td>Shirt</td>
		<td><a href="Update.php">Update</a></td>
		<td><a href="Delete.php">Delete</td>
		
		</tr>
		
		<tr>
		<td>3</td>
		<td>White Shirt</td>
		<td><img src="white.jpg"width="100px"height="80px"></td>
		<td>Shirt</td>
		<td><a href="Update.php">Update</td>
		<td><a href="Delete.php">Delete</td>
		
		</tr>
		
		<tr>
		<td>4</td>
		<td>Black Pant</td>
		<td><img src="black.jpg"width="100px"height="80px"></td>
		<td>Pant</td>
		<td><a href="Update.php">Update</td>
		<td><a href="Delete.php">Delete</td>
		
		</tr>
		
		<tr>
		<td>5</td>
		<td>White Pant</td>
		<td><img src="whitepant.jpg"width="100px"height="80px"></td>
		<td>Pant</td>
		<td><a href="Update.php">Update</td>
		<td><a href="Delete.php">Delete</td>
		
		</tr>
		
		
	</table>
	</body>
