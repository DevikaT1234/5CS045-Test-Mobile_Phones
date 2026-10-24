<?php 

	$mysqli = new mysqli("localhost", "db2425687", "ManUnited123#", "db2425687");

	if ($mysqli -> connect_errno) {
	  die("Failed to connect to MySQL: ".$mysqli -> connect_error);
	  exit();
	}
	
	// echo ("Connection successful");
	
	$sql = "SELECT Phone_name, Brand, Price, Release_date FROM mobile_phones";
	
	$result = $mysqli->query($sql);
	
	if (!$result) {
		die('Data retrieval failed.');
		exit();
	}	
	// echo ("Data retrieval successful"); 
	
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<title>Mobile Phone Names Collection</title>

    <style>
        table {
			border collapse: collapse;
			width: 100%
		}
		
		th, td {
		    border: 1px solid black;
			padding: 8px
			text-align: left;
		}
		
		th {
			background-color: #eeeeee;
		}
		
	</style>
</head>

<body>
    <h1>Mobile Phone Names Collection</h1>
	
	<table>
	    </thead>
		    <tr>
			    <th>Phone name</th>
				<th>Brand</th>
				<th>Price</th>
				<th>Release date</th>
			</tr>
		</thead>
		
		<tbody>
		    <?php while ($a_row = mysqli_fetch_assoc($result)): ?>		
				<tr>
					<td><?= $a_row['Phone_name']?> </td>
					<td><?= $a_row['Brand'] ?> </td> 
					<td>&pound<?= $a_row['Price'] ?> </td>
					<<td><?= $a_row['Release_date'] ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
	
	<?php mysqli_free_result($result); ?>
</body>
</html> 