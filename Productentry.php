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
	


<form method="post"action="Seller.php">

	<br/><br/>
	
	<table border="2" width="100%"height="50%">
	<tr>
	<th colspan="50%">Product Details </th>	
	</tr>
	
	<tr>
	<th>Product Id :</th>
	<td><input type="text"placeholder="Id" name="id"></td>
	</tr>
	
	<tr>
	<th>Product Name :</th>
	<td><input type="text"placeholder="Name" name="name"></td>
	</tr>
	
	<tr>
	<th>Product view :</th>
	<td><input type="file" name="file" value="Upload File"></td>
	</tr>
	
	<tr>
	<th>Price :</th>
	<td><input type="text"placeholder="Price" name="price"></td>
	</tr>
	
	<tr>
	<th>Description :</th>
	<td><input type="text"placeholder="Description" name="description"></td>
	</tr>	
	
	<tr>
	<th>Catgory :</th>
	<td><select name="catgory">
			<option value="shirt">Shirt</option>
			<option value="pant">Pant</option>
			<option value="shoe">Shoe</option></td>
	</tr>
	
	</table><br/><br/>
	
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<input name="upload" type="submit" value="Update">


</form>
		
		</tr>	
</table>
</body>
